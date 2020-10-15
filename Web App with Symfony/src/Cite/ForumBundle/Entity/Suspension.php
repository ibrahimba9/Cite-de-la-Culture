<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suspension
 *
 * @ORM\Table(name="suspension", indexes={@ORM\Index(name="fk_sujet_susp", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_susp", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class Suspension
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
     * @ORM\Column(name="ID_Sujet", type="integer", nullable=false)
     */
    private $idSujet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Suspension", type="datetime", nullable=true)
     */
    private $dateSuspension;

    /**
     * @var integer
     *
     * @ORM\Column(name="Periode", type="integer", nullable=false)
     */
    private $periode;

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
     * @return Suspension
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
     * Set dateSuspension
     *
     * @param \DateTime $dateSuspension
     *
     * @return Suspension
     */
    public function setDateSuspension($dateSuspension)
    {
        $this->dateSuspension = $dateSuspension;

        return $this;
    }

    /**
     * Get dateSuspension
     *
     * @return \DateTime
     */
    public function getDateSuspension()
    {
        return $this->dateSuspension;
    }

    /**
     * Set periode
     *
     * @param integer $periode
     *
     * @return Suspension
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return integer
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return Suspension
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
