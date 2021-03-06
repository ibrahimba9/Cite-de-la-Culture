<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuiviSujet
 *
 * @ORM\Table(name="suivi_sujet", indexes={@ORM\Index(name="fk_sujet_suivi", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_suivi", columns={"ID_Abonne"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\SuiviSujetRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class SuiviSujet
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
     * @ORM\Column(name="Date_Suivi", type="datetime", nullable=true)
     */
    private $dateSuivi;

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
     * @param \Cite\ForumBundle\Entity\Sujets $idSujet
     *
     * @return SuiviSujet
     */
    public function setIdSujet($idSujet)
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
     * @ORM\PrePersist
     */
    public function onPrePersistSetDateSuivi(){
        $this->setDateSuivi(new \DateTime());
    }

    /**
     * Set dateSuivi
     *
     * @param \DateTime $dateSuivi
     *
     * @return SuiviSujet
     */
    public function setDateSuivi($dateSuivi)
    {
        $this->dateSuivi = $dateSuivi;

        return $this;
    }

    /**
     * Get dateSuivi
     *
     * @return \DateTime
     */
    public function getDateSuivi()
    {
        return $this->dateSuivi;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return SuiviSujet
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
}
