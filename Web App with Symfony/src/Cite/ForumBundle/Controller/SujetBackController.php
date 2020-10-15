<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2019
 * Time: 13:49
 */

namespace Cite\ForumBundle\Controller;
use Cite\ForumBundle\Entity\Bannissement;
use Cite\ForumBundle\Entity\MotsMasques;
use Cite\ForumBundle\Form\MotsMasquesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cite\ForumBundle\CiteForumBundle;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Jojoee\Library\LeoProfanity as LeoProfanity;

class SujetBackController extends Controller
{
    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listerAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('CiteForumBundle:Sujets')->findBy(
            array(),
            array('dateCreation' => 'desc'),
            $limit  = null,
            $offset = null);
        foreach ($sujets as $s){
            $nbr = $em->getRepository('CiteForumBundle:Messages')->getNombreMessages($s->getIdSujet());
            $nbrP = $em->getRepository('CiteForumBundle:Messages')->getNombreParticipants($s->getIdSujet());
            $nbrS = $em->getRepository('CiteForumBundle:SuiviSujet')->getNombreSuivi($s->getIdSujet());
            $s->setNbrMessages($nbr);
            $s->setNbrParticipants($nbrP);
            $s->setNbrSuivi($nbrS);
        }
        $listP = $this->get('knp_paginator')->paginate(
            $sujets,
            $request->query->get('page', 1),
            10
        );
        return $this->render('@CiteForum/Back/listeDesSujets.html.twig', array(
            'sujets' => $listP
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function confirmDeleteSujetAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $em->remove($sujet);
        $em->flush();

        return $this->redirectToRoute('back_sujet_lister');

    }


    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listerBanAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('CiteForumBundle:Sujets')->findBy(
            array(),
            array('dateCreation' => 'desc'),
            $limit  = null,
            $offset = null);

        $listP = $this->get('knp_paginator')->paginate(
            $sujets,
            $request->query->get('page', 1),
            10
        );
        return $this->render('@CiteForum/Back/SujetBannissement.html.twig', array(
            'sujets' => $listP
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listerPartBanAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $participantsid = $em->getRepository('CiteForumBundle:Messages')->getParticipants($sujet);
        $participants = array();
        foreach ($participantsid as $idp){
            foreach ($idp as $x){
                $abonne = $em->getRepository('CiteUserBundle:User')->find($x);
                $ban = $em->getRepository('CiteForumBundle:Bannissement')->findOneBy(array(
                    "idSujet" => $sujet,
                    "idAbonne" => $abonne
                ));
                if($ban != null){
                    $abonne->setIsBanned(true);
                }
                array_push($participants, $abonne);
            }

        }

        $participantsP = $this->get('knp_paginator')->paginate(
            $participants,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteForum/Back/ListerPartBan.html.twig', array(
            'participants' => $participantsP,
            'sujet' => $sujet
        ));
    }


    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function confirmBannirAction($idSujet, $idAbonne){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);
        $participant = $em->getRepository('CiteUserBundle:User')->find($idAbonne);

        $ban = new Bannissement();
        $ban->setIdSujet($sujet);
        $ban->setIdAbonne($participant);
        $em->persist($ban);
        $em->flush();

        $message = (new \Swift_Message('Bannissement'))
            ->setFrom('your_email')
            ->setTo($participant->getEmail())
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@CiteForum/Back/mailBannissement.html.twig',
                    ['name' => $participant->getUsername(),
                        'sujet' => $sujet,
                        'date' => new \DateTime()]
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('back_ban_participants', array(
             'id' => $idSujet
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function cancelBannirAction($idSujet, $idAbonne){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);
        $abonne = $em->getRepository('CiteUserBundle:User')->find($idAbonne);
        $ban = $em->getRepository('CiteForumBundle:Bannissement')->findOneBy(array(
            "idSujet" => $sujet,
            "idAbonne" => $abonne
        ));

        $em->remove($ban);
        $em->flush();

        $message = (new \Swift_Message('Bannissement'))
            ->setFrom('your_email')
            ->setTo($abonne->getEmail())
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@CiteForum/Back/mailAnnulerBan.html.twig',
                    ['name' => $abonne->getUsername(),
                        'sujet' => $sujet,
                        'date' => new \DateTime()]
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('back_ban_participants', array(
            'id' => $idSujet
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listerSujetsSignalesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $signaux = $em->getRepository('CiteForumBundle:SignauxSujet')->findAll();

        $signauxP = $this->get('knp_paginator')->paginate(
            $signaux,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteForum/Back/listeSignauxSujets.html.twig', array(
            "signaux" => $signauxP
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deleteSujetSignaleAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $em->remove($sujet);
        $em->flush();

        return $this->redirectToRoute('back_sujets_Signales');
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public  function DeleteSignalSujetAction($id){
        $em = $this->getDoctrine()->getManager();
        $signal = $em->getRepository('CiteForumBundle:SignauxSujet')->find($id);
        $em->remove($signal);
        $em->flush();

        return $this->redirectToRoute('back_sujets_Signales');
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function listerMessagesSignalesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $signaux = $em->getRepository('CiteForumBundle:Signaux')->findAll();

        $signauxP = $this->get('knp_paginator')->paginate(
            $signaux,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteForum/Back/listeSignauxMessages.html.twig', array(
            "signaux" => $signauxP
        ));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deleteMessageSignaleAction($id){
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($id);
        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('back_messages_Signales');
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public  function DeleteSignalMessageAction($id){
        $em = $this->getDoctrine()->getManager();
        $signal = $em->getRepository('CiteForumBundle:Signaux')->find($id);
        $em->remove($signal);
        $em->flush();

        return $this->redirectToRoute('back_messages_Signales');
    }

}