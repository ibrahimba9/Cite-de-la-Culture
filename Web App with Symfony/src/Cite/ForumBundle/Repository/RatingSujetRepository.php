<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09/05/2019
 * Time: 06:41
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class RatingSujetRepository extends EntityRepository
{
    public function getRate($sujet){
        $query = $this->getEntityManager()
            ->createQuery("select avg(r.rate) as note from CiteForumBundle:RatingSujet r where r.idSujet=:id")
            ->setParameter("id",$sujet);


        return $query->getSingleScalarResult();
    }
}