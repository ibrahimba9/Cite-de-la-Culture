<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signaux
 *
 * @ORM\Table(name="signaux", indexes={@ORM\Index(name="fk_message_signal", columns={"id_message"}), @ORM\Index(name="fk_abonne_signal", columns={"id_abonne"})})
 * @ORM\Entity
 */
class Signaux
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
     * @ORM\Column(name="date_signal", type="datetime", nullable=false)
     */
    private $dateSignal = 'CURRENT_TIMESTAMP';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abonne", referencedColumnName="ID")
     * })
     */
    private $idAbonne;

    /**
     * @var \Messages
     *
     * @ORM\ManyToOne(targetEntity="Messages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_message", referencedColumnName="ID_Message")
     * })
     */
    private $idMessage;


}

