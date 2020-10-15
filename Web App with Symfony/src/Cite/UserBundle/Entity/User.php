<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/03/2019
 * Time: 23:40
 */

namespace Cite\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="Cite\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    private $nbrMessages;

    private $nbrLikes;

    private $isBanned;

    public function __construct()
    {
        parent::__construct();
    }

    public function getNbrMessages(){
        return $this->nbrMessages;
    }

    public function getNbrLikes(){
        return $this->nbrLikes;
    }

    public function setNbrMessages($value){
        $this->nbrMessages = $value;
    }

    public function setNbrLikes($value){
        $this->nbrLikes = $value;
    }

    public function getisBanned(){
        return $this->isBanned;
    }

    public function setIsBanned($value){
        $this->isBanned = $value;
    }
}
