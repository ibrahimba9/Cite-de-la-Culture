<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;

/**
 * Bannissement
 *
 * @ORM\Table(name="bannissement", indexes={@ORM\Index(name="fk_sujet_ban", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_ban", columns={"ID_Abonne"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Bannissement implements NotifiableInterface, \JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Bannissement", type="datetime", nullable=true)
     */
    private $dateBannissement;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSujet
     *
     * @param integer $idSujet
     *
     * @return Bannissement
     */
    public function setIdSujet($idSujet)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get idSujet
     *
     * @return integer
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateBannissement(){
        $this->setDateBannissement(new \DateTime());
    }

    /**
     * Set dateBannissement
     *
     * @param \DateTime $dateBannissement
     *
     * @return Bannissement
     */
    public function setDateBannissement($dateBannissement)
    {
        $this->dateBannissement = $dateBannissement;

        return $this;
    }

    /**
     * Get dateBannissement
     *
     * @return \DateTime
     */
    public function getDateBannissement()
    {
        return $this->dateBannissement;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Bannissement
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

    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification->setIdSujet($this->getIdSujet());
        $notification->setIdAbonne($this->getIdAbonne());
        $notification->setUsername($this->getIdAbonne()->getUsername());
        $notification->setTitle("Sujet: ".$this->getIdSujet()->getTitre());
        $notification->setIcon("ban");
        $notification->setDescription($this->getIdAbonne()->getUsername()." a été banni du forum.");


        $notification->setRoute('see_notification_number');
        $notification->setParameters(array('number' => $notification->getNumber() ));
        $builder->addNotification($notification);

        return $builder;
    }

    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        return $builder;
    }

    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification->setIdSujet($this->getIdSujet());
        $notification->setIdAbonne($this->getIdAbonne());
        $notification->setUsername($this->getIdAbonne()->getUsername());
        $notification->setTitle("Sujet: ".$this->getIdSujet()->getTitre());
        $notification->setIcon("ban");
        $notification->setDescription($this->getIdAbonne()->getUsername()." peut désormais participer au forum.");


        $notification->setRoute('see_notification_number');
        $notification->setParameters(array('number' => $notification->getNumber() ));
        $builder->addNotification($notification);

        return $builder;
    }

    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
