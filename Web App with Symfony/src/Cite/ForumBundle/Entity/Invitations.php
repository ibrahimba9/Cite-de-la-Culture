<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations", indexes={@ORM\Index(name="fk_hote_invitation", columns={"id_hote"}), @ORM\Index(name="fk_invite_invitation", columns={"id_invite"}), @ORM\Index(name="fk_sujet_invitation", columns={"id_sujet"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\InvitationsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Invitations
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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=false)
     */
    private $etat = 'en attente';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invitation", type="datetime", nullable=false)
     */
    private $dateInvitation;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hote", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idHote;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_invite", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idInvite;

    /**
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="ID_Sujet", onDelete="CASCADE")
     * })
     */
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Invitations
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateInvitation(){
        $this->setDateInvitation(new \DateTime());
    }

    /**
     * Set dateInvitation
     *
     * @param \DateTime $dateInvitation
     *
     * @return Invitations
     */
    public function setDateInvitation($dateInvitation)
    {
        $this->dateInvitation = $dateInvitation;

        return $this;
    }

    /**
     * Get dateInvitation
     *
     * @return \DateTime
     */
    public function getDateInvitation()
    {
        return $this->dateInvitation;
    }

    /**
     * Set idHote
     *
     * @param \Cite\UserBundle\Entity\User $idHote
     *
     * @return Invitations
     */
    public function setIdHote(\Cite\UserBundle\Entity\User $idHote = null)
    {
        $this->idHote = $idHote;

        return $this;
    }

    /**
     * Get idHote
     *
     * @return \Cite\UserBundle\Entity\User
     */
    public function getIdHote()
    {
        return $this->idHote;
    }

    /**
     * Set idInvite
     *
     * @param \Cite\UserBundle\Entity\User $idInvite
     *
     * @return Invitations
     */
    public function setIdInvite(\Cite\UserBundle\Entity\User $idInvite = null)
    {
        $this->idInvite = $idInvite;

        return $this;
    }

    /**
     * Get idInvite
     *
     * @return \Cite\UserBundle\Entity\User
     */
    public function getIdInvite()
    {
        return $this->idInvite;
    }

    /**
     * Set idSujet
     *
     * @param \Cite\ForumBundle\Entity\Sujets $idSujet
     *
     * @return Invitations
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
    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification->setIdSujet($this->getIdSujet());
        $notification->setIdAbonne($this->getIdHote());
        $notification->setUsername($this->getIdAbonne()->getUsername());
        $notification->setTitle($this->getIdSujet()->getTitre());
        $notification->setIcon("invitation");
        $notification->setDescription($this->setIdHote()->getUsername()." vous a invité à participerà son sujet.");


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
        return $builder;
    }

    function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
