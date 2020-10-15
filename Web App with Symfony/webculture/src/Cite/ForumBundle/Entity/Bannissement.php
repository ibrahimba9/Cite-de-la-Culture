<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bannissement
 *
 * @ORM\Table(name="bannissement", indexes={@ORM\Index(name="fk_sujet_ban", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_ban", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class Bannissement
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
     * @ORM\Column(name="Date_Bannissement", type="datetime", nullable=true)
     */
    private $dateBannissement = 'CURRENT_TIMESTAMP';

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

