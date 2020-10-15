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
    private $dateSuspension = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="Periode", type="integer", nullable=false)
     */
    private $periode;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="ID")
     * })
     */
    private $idAbonne;


}

