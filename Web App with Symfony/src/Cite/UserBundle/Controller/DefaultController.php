<?php

namespace Cite\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('CiteForumBundle:Notification')->getNotifications($this->getUser()->getId());
        $nbrNotifs = $em->getRepository('CiteForumBundle:Notification')->getCountNotifsNotSeen($this->getUser()->getId());
        $nbrInvitations = $em->getRepository('CiteForumBundle:Invitations')->getCountInvitations($this->getUser());
        return $this->render('@CiteUser/Default/index.html.twig', array(
            "notifs" => $notifs,
            "countNS" => $nbrNotifs,
            "nbrInvitations" => $nbrInvitations
        ));
    }
}
