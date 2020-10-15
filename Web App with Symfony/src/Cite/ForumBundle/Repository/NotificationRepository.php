<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14/04/2019
 * Time: 22:41
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class NotificationRepository extends EntityRepository
{
    public function getNotifications($id){
        $query = $this->getEntityManager()
            ->createQuery("select n from CiteForumBundle:Notification n where n.icon!='invitation' and n.idAbonne!=:ida and n.idSujet in 
            (select IDENTITY(s.idSujet) from CiteForumBundle:SuiviSujet s where s.idAbonne=:id) order by n.date DESC")
            ->setParameters(array(
                'id' => $id,
                'ida' => $id
            ));

        return $query->getResult();
    }

    public function getInvitations($id){
        $query = $this->getEntityManager()
            ->createQuery("select n from CiteForumBundle:Notification n where n.icon='invitation' and n.idAbonne!=:ida and n.idSujet in 
            (select IDENTITY(s.idSujet) from CiteForumBundle:Invitations s where s.idInvite=:id) order by n.date DESC")
            ->setParameters(array(
                'id' => $id,
                'ida' => $id
            ));
        return $query->getResult();
    }

    public function getCountNotifsNotSeen($id){
        $query = $this->getEntityManager()
            ->createQuery("select count(n) from CiteForumBundle:Notification n where n.seen=0 and n.icon!='invitation' and n.idAbonne!=:ida and n.idSujet in 
            (select IDENTITY(s.idSujet) from CiteForumBundle:SuiviSujet s where s.idAbonne=:id)")
            ->setParameters(array(
                'id' => $id,
                'ida' => $id
            ));
        return $query->getSingleScalarResult();
    }
}