<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonne
 *
 * @ORM\Table(name="abonne")
 * @ORM\Entity
 */
class Abonne
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_Abonne", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Mdp", type="string", length=30, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="Signature", type="string", length=200, nullable=true)
     */
    private $signature;


}

