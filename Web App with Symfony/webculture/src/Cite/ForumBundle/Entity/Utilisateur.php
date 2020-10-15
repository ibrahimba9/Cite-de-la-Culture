<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=15, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=15, nullable=false)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_TEL", type="integer", nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=35, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", nullable=false)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_AJ", type="date", nullable=false)
     */
    private $dateAj;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="SIGNATURE", type="string", length=100, nullable=true)
     */
    private $signature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAST_TIME_LOGGED", type="datetime", nullable=true)
     */
    private $lastTimeLogged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOGIN_TIME", type="datetime", nullable=true)
     */
    private $loginTime;


}

