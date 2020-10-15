<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/03/2019
 * Time: 19:03
 */

namespace Cite\UserBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Repository;

class UserRepository extends EntityRepository
{
    public function chercherAbonne($username){
        $query = $this->getEntityManager()
            ->createQuery("select u from CiteUserBundle:User u where u.username LIKE '%".$username."%'");

        return $query->getResult();
    }


}