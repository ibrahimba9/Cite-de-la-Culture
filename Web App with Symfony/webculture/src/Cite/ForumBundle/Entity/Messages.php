<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="fk_abonne_msg", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Sujet", type="integer", nullable=false)
     */
    private $idSujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="string", length=300, nullable=false)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Publication", type="datetime", nullable=false)
     */
    private $datePublication = 'CURRENT_TIMESTAMP';

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

