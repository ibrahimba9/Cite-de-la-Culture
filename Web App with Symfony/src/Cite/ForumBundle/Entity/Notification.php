<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14/04/2019
 * Time: 21:57
 */

namespace Cite\ForumBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Model\BaseNotification;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\NotificationRepository")
 */
class Notification extends BaseNotification implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Cite\ForumBundle\Entity\Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Sujet", referencedColumnName="ID_Sujet", onDelete="CASCADE")
     * })
     */
    private $idSujet;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;

    /**
     * @var bool
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    private $username;

    public function __construct()
    {
        parent::__construct();
        $this->number = uniqid();
    }

    function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * Get seen
     *
     * @return boolean
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * Set idSujet
     *
     * @param \Cite\ForumBundle\Entity\Sujets $idSujet
     *
     * @return Notification
     */
    public function setIdSujet(\Cite\ForumBundle\Entity\Sujets $idSujet = null)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get idSujet
     *
     * @return \Cite\ForumBundle\Entity\Sujets
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Notification
     */
    public function setIdAbonne(\Cite\UserBundle\Entity\User $idAbonne = null)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    /**
     * Get idAbonne
     *
     * @return \Cite\UserBundle\Entity\User
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    public function getUsername(){
        return $this->username;
    }

    public  function setUsername($value){
        $this->username = $value;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Notification
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}
