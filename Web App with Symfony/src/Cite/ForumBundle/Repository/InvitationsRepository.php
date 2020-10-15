<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/04/2019
 * Time: 04:21
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;


class InvitationsRepository extends EntityRepository
{
    public function getCountInvitations($id){
        $query = $this->getEntityManager()
            ->createQuery("select count(i) from CiteForumBundle:Invitations i where i.etat='en attente' and i.idInvite=:id")
            ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }
}