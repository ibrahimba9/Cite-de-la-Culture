<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signaux
 *
 * @ORM\Table(name="signaux", indexes={@ORM\Index(name="fk_message_signal", columns={"id_message"}), @ORM\Index(name="fk_abonne_signal", columns={"id_abonne"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Signaux
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_signal", type="datetime", nullable=false)
     */
    private $dateSignal;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;

    /**
     * @var \Messages
     *
     * @ORM\ManyToOne(targetEntity="Messages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_message", referencedColumnName="ID_Message", onDelete="CASCADE")
     * })
     */
    private $idMessage;

    /**
     * @var String
     *
     * @ORM\Column(name="Description", type="string", length=300, nullable=true)
     */
    private $description;

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
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateSignal(){
        $this->setDateSignal(new \DateTime());
    }

    /**
     * Set dateSignal
     *
     * @param \DateTime $dateSignal
     *
     * @return Signaux
     */
    public function setDateSignal($dateSignal)
    {
        $this->dateSignal = $dateSignal;

        return $this;
    }

    /**
     * Get dateSignal
     *
     * @return \DateTime
     */
    public function getDateSignal()
    {
        return $this->dateSignal;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Signaux
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
     * Set idMessage
     *
     * @param \Cite\ForumBundle\Entity\Messages $idMessage
     *
     * @return Signaux
     */
    public function setIdMessage(\Cite\ForumBundle\Entity\Messages $idMessage = null)
    {
        $this->idMessage = $idMessage;

        return $this;
    }

    /**
     * Get idMessage
     *
     * @return \Cite\ForumBundle\Entity\Messages
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Signaux
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
