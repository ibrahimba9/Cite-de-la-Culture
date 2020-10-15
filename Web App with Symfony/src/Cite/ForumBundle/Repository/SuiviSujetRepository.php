<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09/04/2019
 * Time: 15:26
 */

namespace Cite\ForumBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class SuiviSujetRepository extends EntityRepository
{
    public function getNombreSuivi($id){
        $query = $this->getEntityManager()
            ->createQuery('select count(m.idAbonne) from CiteForumBundle:SuiviSujet m where m.idSujet=:id')
            ->setParameter('id',$id);

        return $query->getSingleScalarResult();
    }
}