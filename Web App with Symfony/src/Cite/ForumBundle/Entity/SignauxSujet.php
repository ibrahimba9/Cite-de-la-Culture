<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignauxSujet
 *
 * @ORM\Table(name="signaux_sujet", indexes={@ORM\Index(name="fk_signal_sujet", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_signal_sujet", columns={"ID_Abonne"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class SignauxSujet
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
     * @ORM\Column(name="Date_Signal", type="datetime", nullable=false)
     */
    private $dateSignal;

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
     * @return SignauxSujet
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
     * @return SignauxSujet
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
     * @return SignauxSujet
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
     * Set description
     *
     * @param string $description
     *
     * @return SignauxSujet
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
