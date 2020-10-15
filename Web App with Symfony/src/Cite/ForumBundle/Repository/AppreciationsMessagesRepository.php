<?php
namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class AppreciationsMessagesRepository extends EntityRepository
{
    public function getCountLikes($idmessage){
        $query = $this->getEntityManager()
            ->createQuery("select count(a.id) from CiteForumBundle:AppreciationsMessages a where a.idMessage=:idm and a.reaction='like'")
            ->setParameters(array(
                'idm' => $idmessage
            ));
        return $query->getSingleScalarResult();
    }

    public function getCountDislikes($idmessage){
        $query = $this->getEntityManager()
            ->createQuery("select count(a.id) from CiteForumBundle:AppreciationsMessages a where a.idMessage=:idm and a.reaction='dislike'")
            ->setParameters(array(
                'idm' => $idmessage
            ));
        return $query->getSingleScalarResult();
    }

    public function getReactionsSujet($idSujet){
        $query = $this->getEntityManager()
            ->createQuery("select a from CiteForumBundle:AppreciationsMessages a where a.idMessage IN(select m.idMessage from CiteForumBundle:Messages m where m.idSujet=:id)")
        ->setParameter('id',$idSujet);


        return $query->getResult();
    }

    public function chercherReaction($idSujet, $idAbonne){
        $query = $this->getEntityManager()
            ->createQuery("select a from CiteForumBundle:AppreciationsMessages a where a.idAbonne=:ida and a.idMessage in
            (select m.idMessage from CiteForumBundle:Messages m where m.idSujet=:ids)")
            ->setParameters(array(
                'ida' => $idAbonne,
                'ids' => $idSujet
            ));
        return $query->getResult();
    }

    public function getNbrLikesUser($id){
        $query = $this->getEntityManager()
            ->createQuery("select count(a.id) from CiteForumBundle:AppreciationsMessages a where a.reaction='like' and a.idMessage in (
            select m.idMessage from CiteForumBundle:Messages m where m.idAbonne=:id)")
            ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }
}