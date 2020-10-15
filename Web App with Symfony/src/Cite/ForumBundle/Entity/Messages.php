<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="fk_abonne_msg", columns={"ID_Abonne"}), @ORM\Index(name="fk_sujet_msg", columns={"ID_Sujet"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\MessagesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Messages implements NotifiableInterface, \JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="string", length=3000, nullable=false)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Publication", type="datetime", nullable=false)
     */
    private $datePublication;

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
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Sujet", referencedColumnName="ID_Sujet", onDelete="CASCADE")
     * })
     */
    private $idSujet;

    private $countLike;

    private $countDislike;

    private $like=false;

    private $dislike=false;

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
     * Set texte
     *
     * @param string $texte
     *
     * @return Messages
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetDatePublication(){
        $this->setDatePublication(new \DateTime());
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Messages
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Messages
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

    /**
     * Set idSujet
     *
     * @param \Cite\ForumBundle\Entity\Sujets $idSujet
     *
     * @return Messages
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

    public function getCountLike(){
        return $this->countLike;
    }

    public function setCountLike($count){
        $this->countLike = $count;
    }

    public function getCountDislike(){
        return $this->countDislike;
    }

    public function setCountDislike($count){
        $this->countDislike = $count;
    }

    public function getLike(){
        return $this->like;
    }

    public function setLike($bool){
        $this->like = $bool;
    }

    public function getDislike(){
        return $this->dislike;
    }

    public function setDislike($bool){
        $this->dislike = $bool;
    }

    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notification = new Notification();
        $notification->setIdSujet($this->getIdSujet());
        $notification->setIdAbonne($this->getIdAbonne());
        $notification->setUsername($this->getIdAbonne()->getUsername());
        $notification->setTitle($this->getIdSujet()->getTitre());
        $notification->setIcon("publication");
        $notification->setDescription($this->getIdAbonne()->getUsername()." a ajouté une nouvelle publication.");


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
