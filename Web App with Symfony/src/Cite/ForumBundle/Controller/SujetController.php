<?php

namespace Cite\ForumBundle\Controller;

use Cite\ForumBundle\CiteForumBundle;
use Cite\ForumBundle\Entity\AppreciationsMessages;
use Cite\ForumBundle\Entity\Messages;
use Cite\ForumBundle\Entity\MotsMasques;
use Cite\ForumBundle\Entity\Notification;
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

class SujetController extends Controller
{
    public function ajouterAction(Request $request)
    {
        $s = new Sujets();
        $form = $this->createForm(SujetsType::class,$s);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $s->setIdAbonne($user);

            $em->persist($s);
            $this->suivreSujetCree($s->getTitre(), $s->getTheme());
            return $this->redirectToRoute('cite_forum_homepage');
        }
        return $this->render('@CiteForum/Front/ajoutersujet.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function suivreSujetCree($titre, $theme){
        $em = $this->getDoctrine()->getManager();

        $sujet = $em->getRepository('CiteForumBundle:Sujets')->findOneBy(array(
            'theme' => $theme,
            'titre' => $titre,
            'idAbonne' => $this->getUser(),
            'dateCreation' => new \DateTime()
        ));
        $suivre = new SuiviSujet();
        $suivre->setIdAbonne($this->getUser());
        $suivre->setIdSujet($sujet);
        $em->persist($suivre);
        $em->flush();
    }

    public function afficherAction($id, $titre, Request $request){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $ban = $em->getRepository('CiteForumBundle:Bannissement')->findOneBy(array(
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
                'idAbonne' => $this->getUser(),
                'idMessage' => $m->getIdMessage(),
                'reaction' => 'like'
            ));

            $dislike = $em->getRepository('CiteForumBundle:AppreciationsMessages')->findOneBy(array(
                'idAbonne' => $this->getUser(),
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
        $messagesPag = $this->get('knp_paginator')->paginate(
            $listeMessages,
            $request->query->get('page', 1),
            10
        );
        $message = new Messages();
        $form = $this->createForm(MessagesType::class,$message);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $user = $em->getRepository('CiteUserBundle:User')->find($this->getUser()->getId());
            $message->setIdAbonne($user);
            $message->setIdSujet($sujet);

            $filter = new LeoProfanity();
            if($filter->check($message->getTexte()))
            {
                $cleanMesage = $filter->clean($message->getTexte());
                $message->setTexte($cleanMesage);
            }

            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('view_sujet', array(
                'sujet' => $sujet,
                'form' => $form->createView(),
                'id' => $id,
                'titre' => $titre,
                'messages' => $messagesPag,
            ));
        }


        return $this->render('@CiteForum/Front/afficherSujet.html.twig', array(
            'sujet' => $sujet,
            'form' => $form->createView(),
            'messages' => $messagesPag,
            'label' => $label,
        ));
    }

    public function voteAction($idmessage, $vote){
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($idmessage);
        $id = $message->getIdSujet();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $voteC = new AppreciationsMessages();
        $voteC->setIdAbonne($this->getUser());
        $voteC->setIdMessage($idmessage);
        $voteC->setReaction($vote);
        $voteC->setIdSujet($sujet);

        $ancienVote = $em->getRepository('CiteForumBundle:AppreciationsMessages')->findOneBy(array(
            'idMessage' => $idmessage,
            'idAbonne' => $this->getUser()
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

        return $this->redirectToRoute('view_sujet', array(
            'id'  => $sujet->getIdSujet(),
            'titre' => $sujet->getTitre()
        ));
    }

    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($id);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($message->getIdSujet());
        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('view_sujet', array(
            'id' => $sujet->getIdSujet(),
            'titre' => $sujet->getTitre()
        ));
    }

    public function suivreAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $dejaSuivi = $em->getRepository('CiteForumBundle:SuiviSujet')->findOneBy( array(
            'idSujet' => $sujet,
            'idAbonne' => $this->getUser()
        ) );
        if($dejaSuivi == null){
            $suiviSujet = new SuiviSujet();
            $suiviSujet->setIdAbonne($this->getUser());
            $suiviSujet->setIdSujet($sujet);
            $em->persist($suiviSujet);
            $em->flush();
        }
        else{
            $em->remove($dejaSuivi);
            $em->flush();
        }


        return $this->redirectToRoute('view_sujet', array(
            'id' => $sujet->getIdSujet(),
            'titre' => $sujet->getTitre(),

        ));
    }

    public function signalerSujetAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $signal = new SignauxSujet();
        $form = $this->createForm(SignauxSujetType::class,$signal);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->getClickedButton() && 'Valider' === $form->getClickedButton()->getName()){
                $user = $this->getUser();
                $signal->setIdAbonne($user);
                $signal->setIdSujet($sujet);
                $em->persist($signal);
                $em->flush();
                return $this->redirectToRoute('cite_forum_homepage');
            }
            else{
                return $this->redirectToRoute('view_sujet', array(
                    'id' => $id,
                    'titre' => $sujet->getTitre()
                ));
            }

        }
        return $this->render('@CiteForum/Front/signalerSujet.html.twig', array(
            "sujet" => $sujet,
            "form" =>$form->createView()
        ));
    }

    public function signalerCommentaireAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('CiteForumBundle:Messages')->find($id);
        $signal = new Signaux();
        $form = $this->createForm(SignauxType::class,$signal);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->getClickedButton() && 'Valider' === $form->getClickedButton()->getName()){
                $user = $this->getUser();
                $signal->setIdAbonne($user);
                $signal->setIdMessage($message);
                $em->persist($signal);
                $em->flush();
                return $this->redirectToRoute('cite_forum_homepage');
            }
            else{
                return $this->redirectToRoute('view_sujet', array(
                    'id' => $message->getIdSujet()->getIdSujet(),
                    'titre' => $message->getIdSujet()->getTitre()
                ));
            }

        }
        return $this->render('@CiteForum/Front/signalerCommentaire.html.twig', array(
            "message" => $message,
            "sujet" => $message->getIdSujet(),
            "form" =>$form->createView()
        ));
    }
}