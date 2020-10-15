<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Sujets
 *
 * @ORM\Table(name="sujets", indexes={@ORM\Index(name="fk_abonne_sujet", columns={"ID_Abonne"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\SujetsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Sujets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Sujet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Theme", type="string", length=20, nullable=false)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=10, nullable=false)
     */
    private $statut = 'Public';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;

    private $motsMasques;

    private $nbrMessages;

    private $nbrParticipants;

    private $nbrSuivi;


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
     * Set theme
     *
     * @param string $theme
     *
     * @return Sujets
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Sujets
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Sujets
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateCreation(){
        $this->setDateCreation(new \DateTime());
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Sujets
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Sujets
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
     * Constructor
     */
    public function __construct()
    {
    }


    public function getNbrMessages(){
        return $this->nbrMessages;
    }

    public function setNbrMessages($value){
        $this->nbrMessages = $value;
    }

    public function getNbrParticipants(){
        return $this->nbrParticipants;
    }

    public function setNbrParticipants($value){
        $this->nbrParticipants = $value;
    }

    public function getNbrSuivi(){
        return $this->nbrSuivi;
    }

    public function setNbrSuivi($value){
        $this->nbrSuivi = $value;
    }
}
