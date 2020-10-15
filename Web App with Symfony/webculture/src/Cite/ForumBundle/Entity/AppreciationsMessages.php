<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppreciationsMessages
 *
 * @ORM\Table(name="appreciations_messages", indexes={@ORM\Index(name="fk_message_appr", columns={"ID_Message"}), @ORM\Index(name="fk_abonne_appr", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class AppreciationsMessages
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
     * @ORM\Column(name="ID_Message", type="integer", nullable=false)
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="Reaction", type="string", nullable=true)
     */
    private $reaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Reaction", type="datetime", nullable=true)
     */
    private $dateReaction = 'CURRENT_TIMESTAMP';

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

