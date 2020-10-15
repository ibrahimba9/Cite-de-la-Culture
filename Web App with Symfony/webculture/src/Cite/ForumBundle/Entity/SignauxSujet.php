<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignauxSujet
 *
 * @ORM\Table(name="signaux_sujet", indexes={@ORM\Index(name="fk_signal_sujet", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_signal_sujet", columns={"ID_Abonne"})})
 * @ORM\Entity
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
    private $dateSignal = 'CURRENT_TIMESTAMP';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="ID")
     * })
     */
    private $idAbonne;

    /**
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Sujet", referencedColumnName="ID_Sujet")
     * })
     */
    private $idSujet;


}

