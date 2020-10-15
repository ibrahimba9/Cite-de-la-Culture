<?php

namespace Cite\UserBundle\Controller;

use Cite\ForumBundle\Entity\Invitations;
use Cite\ForumBundle\Entity\SuiviSujet;
use Cite\ForumBundle\Form\SujetsType;
use Cite\UserBundle\Entity\User;
use Cite\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ForumController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function mesSujetsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $mesSujets = $em->getRepository('CiteForumBundle:Sujets')->findBy(
            array('idAbonne' => $this->getUser()),
            array('dateCreation' => 'desc'),
            null,
            null
        );
        foreach ($mesSujets as $s){
            $s->setNbrMessages( $em->getRepository('CiteForumBundle:Messages')->getNombreMessages($s->getIdSujet()) );
            $s->setNbrParticipants( $em->getRepository('CiteForumBundle:Messages')->getNombreParticipants($s->getIdSujet()) );
            $s->setNbrSuivi($em->getRepository('CiteForumBundle:SuiviSujet')->getNombreSuivi($s->getIdSujet()));
        }
        $sujPag = $this->get('knp_paginator')->paginate(
            $mesSujets,
            $request->query->get('page', 1),
            5
        );
        return $this->render('@CiteUser/Forum/profilSujets.html.twig', array(
            'liste' => $sujPag,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function modifierMonSujetAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $form = $this->createForm(SujetsType::class,$sujet);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->flush();
            return $this->redirectToRoute('profil_forum_sujets');
        }
        return $this->render('@CiteUser/Forum/modifierMonSujet.html.twig', array(
            'form' => $form->createView(),
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function supprimerMonSujetAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);

        $em->remove($sujet);
        $em->flush();

        return $this->redirectToRoute('profil_forum_sujets');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function confirmSupprimerMonSujetAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());

        return $this->render('@CiteUser/Forum/confirmSupprimerSujet.html.twig',array(
            'sujet' =>$sujet,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function inviterAction($idSujet, Request $request){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $abonnes=null;
        $user = new User();
        $form = $this->CreateForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $abonnes = $em->getRepository('CiteUserBundle:User')->chercherAbonne($user->getUsername());
            return $this->render('@CiteUser/Forum/inviterForum.html.twig', array(
                'abonnes' => $abonnes,
                'form' => $form->createView(),
                'idSujet' => $idSujet,
                "notifs" => $notifs,
                "countNS" => $nbrNotifs,
                "nbrInvitations" => $nbrInvitations
            ));
        }
        return $this->render('@CiteUser/Forum/inviterForum.html.twig', array(
            'abonnes' => $abonnes,
            'form' => $form->createView(),
            'idSujet' => $idSujet,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function inviterAbonneAction($idAbonne, $idSujet){
        $em = $this->getDoctrine()->getManager();
        $abonne = $em->getRepository('CiteUserBundle:User')->find($idAbonne);
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($idSujet);
        $invitation = new Invitations();
        $invitation->setIdSujet($sujet);
        $invitation->setIdHote($this->getUser());
        $invitation->setIdInvite($abonne);

        $oldInvitation = $em->getRepository('CiteForumBundle:Invitations')->findOneBy(array(
            'idInvite' => $invitation->getIdInvite(),
            'idSujet' => $invitation->getIdSujet()
        ));

        if($oldInvitation == null){
            $em->persist($invitation);
            $em->flush();

            return $this->redirectToRoute('profil_forum_sujets');
        }
        else{
            $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
            $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
            $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
            return $this->render('@CiteUser/Forum/InvitationExiste.html.twig', array(
                'invitation' => $oldInvitation,
                "notifs" => $notifs,
                "countNS" => $nbrNotifs,
                "nbrInvitations" => $nbrInvitations
            ));
        }

    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function suiviAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $suivis = $em->getRepository('CiteForumBundle:SuiviSujet')->findBy(
            array('idAbonne' => $this->getUser()),
                array('dateSuivi' => 'desc'),
                null,
                null);
        $suiviPag = $this->get('knp_paginator')->paginate(
            $suivis,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteUser/Forum/sujetsSuivis.html.twig', array(
            'sujets' => $suiviPag,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function abandonnerAction($id){
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $suivi = $em->getRepository('CiteForumBundle:SuiviSujet')->findOneBy(array(
            'idSujet' => $sujet,
            'idAbonne' => $this->getUser()
        ));

        $em->remove($suivi);
        $em->flush();

        return $this->redirectToRoute('profil_forum_suivi');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function listerInvitesAction($id){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);
        $invites = $em->getRepository('CiteForumBundle:Invitations')->findBy(
            array('idSujet' => $sujet),
            array('dateInvitation' => 'ASC'),
            null,
            null
        );

        return $this->render('@CiteUser/Forum/listeInvites.html.twig', array(
            'liste' => $invites,
            'titre' => $sujet->getTitre(),
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function confirmAnnulerInvitationAction($id){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $invitation = $em->getRepository('CiteForumBundle:Invitations')->find($id);

        return $this->render('@CiteUser/Forum/confirmAnnulerInvitation.html.twig', array(
            'invitation' => $invitation,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function  annulerInvitationAction($id){
        $em = $this->getDoctrine()->getManager();
        $invitation = $em->getRepository('CiteForumBundle:Invitations')->find($id);

        $em->remove($invitation);
        $em->flush();

        return $this->redirectToRoute('profil_forum_sujets');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function listerAbonnesSujetAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);

        $listeSuivi = $em->getRepository('CiteForumBundle:SuiviSujet')->findBy(
            array("idSujet" => $sujet),
            array("dateSuivi" => "DESC"),
            null,
            null
        );


        $listeSuiviP = $this->get('knp_paginator')->paginate(
            $listeSuivi,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteUser/Forum/listeAbonnesSujet.html.twig', array(
            'liste' => $listeSuiviP,
            "sujet" => $sujet,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));

    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function listerParticipantsSujetAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        $sujet = $em->getRepository('CiteForumBundle:Sujets')->find($id);

        $listeParticipantsId = $em->getRepository('CiteForumBundle:Messages')->getParticipants($sujet);

        $listeParticipants = Array();

        foreach ($listeParticipantsId as $idp){
            $user = $em->getRepository('CiteUserBundle:User')->find($idp[1]);
            array_push($listeParticipants, $user);
        }

        $listeParticipantsP = $this->get('knp_paginator')->paginate(
            $listeParticipants,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteUser/Forum/listeParticipantsSujet.html.twig', array(
            'liste' => $listeParticipantsP,
            "sujet" => $sujet,
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function consulterNotificationAction($id){
        $em = $this->getDoctrine()->getManager();
        $notif = $em->getRepository('CiteForumBundle:Notification')->find($id);
        $notif->setSeen(true);
        $em->flush();
        return $this->redirectToRoute('view_sujet', array(
            'id' => $notif->getIdSujet()->getIdSujet(),
            'titre' => $notif->getIdSujet()->getTitre()
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function consulterNotificationNumAction($number){
        $em = $this->getDoctrine()->getManager();
        $notif = $em->getRepository('CiteForumBundle:Notification')->findOneBy(
            array('number' => $number)
        );
        $notif->setSeen(true);
        $em->flush();
        return $this->redirectToRoute('view_sujet', array(
            'id' => $notif->getIdSujet()->getIdSujet(),
            'titre' => $notif->getIdSujet()->getTitre()
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function listerInvitationsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $invitations = $em->getRepository('CiteForumBundle:Invitations')->findBy(
            array('etat' => 'en attente', 'idInvite' => $this->getUser()),
            array('dateInvitation' => 'DESC'),
            null,
            null
        );

        $invitationsP = $this->get('knp_paginator')->paginate(
            $invitations,
            $request->query->get('page', 1),
            5
        );

        return $this->render('@CiteUser/Forum/listeInvitations.html.twig', array(
            'invitations' => $invitationsP,
            'nbrInvitations' => count($invitations),
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function accepterInvitationAction($id){
        $em = $this->getDoctrine()->getManager();
        $invitation = $em->getRepository('CiteForumBundle:Invitations')->find($id);
        $suivre = new SuiviSujet();
        $suivre->setIdAbonne($this->getUser());
        $suivre->setIdSujet($invitation->getIdSujet());
        $invitation->setEtat('Acceptée');
        $em->persist($suivre);
        $em->flush();
         return $this->redirectToRoute('lister_invitations');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function refuserInvitationAction($id){
        $em = $this->getDoctrine()->getManager();
        $invitation = $em->getRepository('CiteForumBundle:Invitations')->find($id);

        $invitation->setEtat('Refusée');
        $em->flush();
        return $this->redirectToRoute('lister_invitations');
    }
}
