<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2019
 * Time: 14:35
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class SujetsRepository extends EntityRepository
{
    public function getSujetMessage($id){
        $query = $this->getEntityManager()
            ->createQuery('select m.idSujet from CiteForumBundle:Messages m where m.idSujet=:id')
            ->setParameter('id',$id);

        return $query->getResult();
    }

    public function searchAuteur( $user){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.idAbonne in 
            (select u.id from CiteUserBundle:User u where  u.username like '%".$user."%')");
        return $query->getResult();
    }

    public function searchTitre( $title){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.titre like '%".$title."%'");
        return $query->getResult();
    }

    public function searchTheme($theme){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.theme like '%".$theme."%'");
        return $query->getResult();
    }

    public function searchTitreTheme($title, $theme){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.theme like '%".$theme."%' and s.titre like '%".$title."%'");
        return $query->getResult();
    }

    public function searchTitreAuteur($title,$user){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.titre like '%".$title."%' and s.idAbonne in 
            (select u.id from CiteUserBundle:User u where  u.username like '%".$user."%')");
        return $query->getResult();
    }

    public function searchThemeAuteur($theme,$user){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.theme like '%".$theme."%' and s.idAbonne in 
            (select u.id from CiteUserBundle:User u where  u.username like '%".$user."%')");
        return $query->getResult();
    }

    public function searchTitreThemeAuteur($theme,$title,$user){
        $query = $this->getEntityManager()
            ->createQuery("select s from CiteForumBundle:Sujets s where s.theme like '%".$theme."%' and s.titre like '%".$title."%' and s.idAbonne in 
            (select u.id from CiteUserBundle:User u where  u.username like '%".$user."%')");
        return $query->getResult();
    }
}