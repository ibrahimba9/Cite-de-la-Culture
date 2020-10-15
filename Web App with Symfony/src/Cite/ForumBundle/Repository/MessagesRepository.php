<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2019
 * Time: 14:37
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class MessagesRepository extends EntityRepository
{
    public function getNombreMessages($id){
        $query = $this->getEntityManager()
            ->createQuery('select count(m.idSujet) from CiteForumBundle:Messages m where m.idSujet=:id')
        ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }

    public function getNombreMessageUser($id){
        $query = $this->getEntityManager()
            ->createQuery('select count(m.idMessage) from CiteForumBundle:Messages m where m.idAbonne=:id')
            ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }

    public function getNombreParticipants($id){
        $query = $this->getEntityManager()
            ->createQuery('select count(DISTINCT m.idAbonne) AS nbrp from CiteForumBundle:Messages m where m.idSujet=:id')
            ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }

    public function getParticipants($id){
        $query = $this->getEntityManager()
            ->createQuery('select DISTINCT IDENTITY(m.idAbonne) from CiteForumBundle:Messages m where m.idSujet=:id')
            ->setParameter('id',$id);

        return $query->getResult();
    }
}