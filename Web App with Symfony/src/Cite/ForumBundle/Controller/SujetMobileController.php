<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/04/2019
 * Time: 19:07
 */

namespace Cite\ForumBundle\Controller;
use Cite\ForumBundle\CiteForumBundle;
use Cite\ForumBundle\Entity\AppreciationsMessages;
use Cite\ForumBundle\Entity\Messages;
use Cite\ForumBundle\Entity\MotsMasques;
use Cite\ForumBundle\Entity\Notification;
use Cite\ForumBundle\Entity\RatingSujet;
use Cite\ForumBundle\Entity\Signaux;
use Cite\ForumBundle\Entity\SignauxSujet;
use Cite\ForumBundle\Entity\SuiviSujet;
use Cite\ForumBundle\Form\AppreciationsMessagesType;
use Cite\ForumBundle\Form\MessagesType;
use Cite\ForumBundle\Form\MotsMasquesType;
use Cite\ForumBundle\Form\SignauxSujetType;
use Cite\ForumBundle\Form\SignauxType;
use Cite\ForumBundle\Form\SujetsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cite\ForumBundle\Entity\Sujets;
use Symfony\Component\HttpFoundation\Request;
use Cite\UserBundle\Entity\User;
use Jojoee\Library\LeoProfanity as LeoProfanity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SujetMobileController extends Controller
{
    public function loginUserAction(Request $request){
        $username = $request->get('username');
        $user = $this->getDoctrine()->getManager()
            ->getRepository('CiteUserBundle:User')->findOneBy(array('username'=>$username));
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);
    }

    public function ajouterAction(Request $request)
    {
        $s = new Sujets();
        $s->setTheme($request->get('theme'));
        $s->setTitre($request->get('titre'));
        $idUser = $request->get('idUser');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $s->setIdAbonne($user);
        $em->persist($s);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($s);
        return new JsonResponse($formatted);
    }

    public function listerAction(){
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('CiteForumBundle:Sujets')->findBy(
            array(),
            array('dateCreation' => 'desc'),
            $limit  = null,
            $offset = null);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujets);
        return new JsonResponse($formatted);
    }

    public function listerMesSujetsAction(Request $request){
        $idUser = $request->get('idUser');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $sujets = $em->getRepository('CiteForumBundle:Sujets')->findBy(
            array('idAbonne' => $user),
            array('dateCreation' => 'desc')
                ,
            $limit  = null,
            $offset = null);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujets);
        return new JsonResponse($formatted);
    }

    public function afficherSujetAction(Request $request){
        $id = $request->get('idSujet');
        $idUser = $request->get('idUser');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        /*$ban = $em->getRepository('CiteForumBundle:Bannissement')->findOneBy(array(
            'idSujet' => $sujet,
            'idAbonne' => $this->getUser()
        ));

        if($ban != null){
            return $this->render('@CiteForum/Front/isBanned.html.twig', array(
                'sujet' => $sujet
            ));
        }
        $label="Suivre";
        $dejaSuivi = $em->getRepository('CiteForumBundle:SuiviSujet')->findOneBy(array(
            'idSujet' => $sujet,
            'idAbonne' => $this->getUser()
        ));
        if($dejaSuivi == null){
            $label = "Suivre";
        }
        else{
            $label = "Ne Plus Suivre";
        }
        */

        $listeMessages = $em->getRepository('CiteForumBundle:Messages')->findBy(
            array('idSujet' => $sujet),
            array('datePublication' => 'desc'),
            $limit  = null,
            $offset = null);


        foreach ($listeMessages as $m){
            $m->setCountLike( $em->getRepository('CiteForumBundle:AppreciationsMessages')->getCountLikes($m->getIdMessage()) );
            $m->setCountDislike( $em->getRepository('CiteForumBundle:AppreciationsMessages')->getCountDislikes($m->getIdMessage()) );
            $m->getIdAbonne()->setNbrMessages($em->getRepository('CiteForumBundle:Messages')->getNombreMessageUser($m->getIdAbonne()));
            $m->getIdAbonne()->setNbrLikes($em->getRepository('CiteForumBundle:AppreciationsMessages')->getNbrLikesUser($m->getIdAbonne()));


            $like = $em->getRepository('CiteForumBundle:AppreciationsMessages')->findOneBy(array(
                'idAbonne' => $user,
                'idMessage' => $m->getIdMessage(),
                'reaction' => 'like'
            ));

            $dislike = $em->getRepository('CiteForumBundle:AppreciationsMessages')->findOneBy(array(
                'idAbonne' => $user,
                'idMessage' => $m->getIdMessage(),
                'reaction' => 'dislike'
            ));
            if($like != null){
                $m->setLike(true);
            }
            if($dislike != null){
                $m->setDislike(true);
            }


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($listeMessages);
        return new JsonResponse($formatted);
    }

    public function voterAction(Request $request){
        $idmessage = $request->get('idMessage');
        $idUser = $request->get('idUser');
        $vote = $request->get('vote');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $message = $em->getRepository('CiteForumBundle:Messages')->find($idmessage);
        $id = $message->getIdSujet();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $voteC = new AppreciationsMessages();
        $voteC->setIdAbonne($user);
        $voteC->setIdMessage($idmessage);
        $voteC->setReaction($vote);
        $voteC->setIdSujet($sujet);

        $ancienVote = $em->getRepository('CiteForumBundle:AppreciationsMessages')->findOneBy(array(
            'idMessage' => $idmessage,
            'idAbonne' => $user
        ));

        if($ancienVote == null){
            $em->persist($voteC);
            $em->flush();
        }
        else{
            if($ancienVote->getReaction() != $voteC->getReaction()){
                $em->persist($voteC);
                $em->remove($ancienVote);
                $em->flush();
            }
            else{
                $em->remove($ancienVote);
                $em->flush();
            }
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($voteC);
        return new JsonResponse($formatted);
    }

    public function ajouterMessageAction(Request $request){
        $idSujet = $request->get('idSujet');
        $idUser = $request->get('idUser');
        $texte = $request->get('texte');

        $em =$this->getDoctrine()->getManager();
        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $msg = new Messages();
        $msg->setIdSujet($sujet);
        $msg->setIdAbonne($user);
        $msg->setTexte($texte);

        $em->persist($msg);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($msg);
        return new JsonResponse($formatted);
    }

    public function modifierMessageAction(Request $request){
        $idMessage = $request->get('idMessage');
        $texte = $request->get('texte');

        $em =$this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($idMessage);

        $message->setTexte($texte);

        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($message);
        return new JsonResponse($formatted);
    }

    public function supprimerMessageAction(Request $request){
        $idMessage = $request->get('idMessage');

        $em =$this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($idMessage);

        $em->remove($message);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($message);
        return new JsonResponse($formatted);
    }

    public function modifierSujetAction(Request $request){
        $idSujet = $request->get('idSujet');
        $titre = $request->get('titre');
        $theme = $request->get('theme');

        $em =$this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $sujet->setTitre($titre);
        $sujet->setTheme($theme);

        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujet);
        return new JsonResponse($formatted);
    }

    public function supprimerSujetAction(Request $request){
        $idSujet = $request->get('idSujet');

        $em =$this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $em->remove($sujet);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujet);
        return new JsonResponse($formatted);
    }

    public function chercherAction(Request $request){
        $auteur = $request->get('auteur');
        $titre = $request->get('titre');
        $theme = $request->get('theme');

        $em = $this->getDoctrine()->getManager();

        if ($theme == null and $titre==null and $auteur!=null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchAuteur($auteur);

        }

        if ($theme == null and $titre!=null and $auteur==null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitre($titre);
        }

        if ($theme != null and $titre==null and $auteur==null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchTheme($theme);

        }

        if ($theme != null and $titre!=null and $auteur==null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreTheme($titre,$theme);
        }

        if ($theme == null and $titre!=null and $auteur!=null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreAuteur($titre,$auteur);
        }

        if ($theme != null and $titre==null and $auteur!=null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchThemeAuteur($theme,$auteur);
        }

        if ($theme != null and $titre!=null and $auteur!=null){

            $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreThemeAuteur($theme,$titre,$auteur);
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($results);
        return new JsonResponse($formatted);
    }

    public function ajouterRateAction(Request $request){
        $idUser = $request->get('idUser');
        $idSujet = $request->get('idSujet');
        $rate = $request->get('rate');

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $ancienRate = $em->getRepository('CiteForumBundle:RatingSujet')->findOneBy(array(
            'idAbonne' => $user,
            'idSujet' => $sujet
        ));

        if($ancienRate == null){
            $newRate = new RatingSujet();
            $newRate->setIdAbonne($user);
            $newRate->setIdSujet($sujet);
            $newRate->setRate($rate);
            $em->persist($newRate);
            $em->flush();

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($newRate);
            return new JsonResponse($formatted);
        }
        else{
            $ancienRate->setRate($rate);
            $em->flush();

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($ancienRate);
            return new JsonResponse($formatted);
        }
    }

    public function getRateAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $idSujet = $request->get('idSujet');
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $note = $em->getRepository('CiteForumBundle:RatingSujet')->getRate($sujet);
        $rate = new RatingSujet();
        $rate->setRate($note);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($rate);
        return new JsonResponse($formatted);
    }

    public function myNoteAction(Request $request){
        $idUser = $request->get('idUser');
        $idSujet = $request->get('idSujet');

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('CiteUserBundle:User')->find($idUser);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);

        $ancienRate = $em->getRepository('CiteForumBundle:RatingSujet')->findOneBy(array(
            'idAbonne' => $user,
            'idSujet' => $sujet
        ));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ancienRate);
        return new JsonResponse($formatted);
    }
}