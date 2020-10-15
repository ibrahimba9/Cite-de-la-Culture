<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;

/**
 * AppreciationsMessages
 *
 * @ORM\Table(name="appreciations_messages", indexes={@ORM\Index(name="fk_message_appr", columns={"ID_Message"}), @ORM\Index(name="fk_abonne_appr", columns={"ID_Abonne"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\AppreciationsMessagesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class AppreciationsMessages implements NotifiableInterface, \JsonSerializable
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
     * @var integer
     *
     * @ORM\Column(name="ID_Message", type="integer", nullable=false)
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="Reaction", type="string", nullable=true)
     */
    private $reaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Reaction", type="datetime", nullable=true)
     */
    private $dateReaction;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;

    private $idSujet;

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
     * Set idMessage
     *
     * @param integer $idMessage
     *
     * @return AppreciationsMessages
     */
    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;

        return $this;
    }

    /**
     * Get idMessage
     *
     * @return integer
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set reaction
     *
     * @param string $reaction
     *
     * @return AppreciationsMessages
     */
    public function setReaction($reaction)
    {
        $this->reaction = $reaction;

        return $this;
    }

    /**
     * Get reaction
     *
     * @return string
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateReaction(){
        $this->setDateReaction(new \DateTime());
    }

    /**
     * Set dateReaction
     *
     * @param \DateTime $dateReaction
     *
     * @return AppreciationsMessages
     */
    public function setDateReaction($dateReaction)
    {
        $this->dateReaction = $dateReaction;

        return $this;
    }

    /**
     * Get dateReaction
     *
     * @return \DateTime
     */
    public function getDateReaction()
    {
        return $this->dateReaction;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return AppreciationsMessages
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
        $notification->setIcon("reaction");
        if($this->getReaction()=='like'){
            $notification->setDescription($this->getIdAbonne()->getUsername()." aime votre publication.");
        }
        else{
            $notification->setDescription($this->getIdAbonne()->getUsername()." n'aime pas votre publication.");
        }

        $notification->setRoute('see_notification_number');
        $notification->setParameters(array('number' => $notification->getNumber() ));
        $builder->addNotification($notification);

        return $builder;
    }

    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification->setIdSujet($this->getIdSujet());
        $notification->setIdAbonne($this->getIdAbonne());
        $notification->setUsername($this->getIdAbonne()->getUsername());
        $notification->setTitle($this->getIdSujet()->getTitre());
        $notification->setIcon("reaction");
        if($this->getReaction()=='like'){
            $notification->setDescription($this->getIdAbonne()->getUsername()." aime votre publication.");
        }
        else{
            $notification->setDescription($this->getIdAbonne()->getUsername()." n'aime pas votre publication.");
        }

        $notification->setRoute('see_notification_number');
        $notification->setParameters(array('number' => $notification->getNumber() ));
        $builder->addNotification($notification);

        return $builder;
    }

    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        return $builder;
    }

    function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function setIdSujet($sujet)
    {
        $this->idSujet = $sujet;

        return $this;
    }


    public function getIdSujet()
    {
        return $this->idSujet;
    }
}
