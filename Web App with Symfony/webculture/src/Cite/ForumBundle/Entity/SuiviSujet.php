<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuiviSujet
 *
 * @ORM\Table(name="suivi_sujet", indexes={@ORM\Index(name="fk_sujet_suivi", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_suivi", columns={"ID_Abonne"})})
 * @ORM\Entity
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
     * @var integer
     *
     * @ORM\Column(name="ID_Sujet", type="integer", nullable=false)
     */
    private $idSujet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Suivi", type="datetime", nullable=true)
     */
    private $dateSuivi = 'CURRENT_TIMESTAMP';

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

