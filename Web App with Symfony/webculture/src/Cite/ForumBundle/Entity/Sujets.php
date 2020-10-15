<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujets
 *
 * @ORM\Table(name="sujets", indexes={@ORM\Index(name="fk_abonne_sujet", columns={"ID_Abonne"})})
 * @ORM\Entity
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
    private $dateCreation = 'CURRENT_TIMESTAMP';

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

