<?php

namespace Cite\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations", indexes={@ORM\Index(name="fk_hote_invitation", columns={"id_hote"}), @ORM\Index(name="fk_invite_invitation", columns={"id_invite"}), @ORM\Index(name="fk_sujet_invitation", columns={"id_sujet"})})
 * @ORM\Entity
 */
class Invitations
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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=false)
     */
    private $etat = 'en attente';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invitation", type="datetime", nullable=false)
     */
    private $dateInvitation = 'CURRENT_TIMESTAMP';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hote", referencedColumnName="ID")
     * })
     */
    private $idHote;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_invite", referencedColumnName="ID")
     * })
     */
    private $idInvite;

    /**
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="ID_Sujet")
     * })
     */
    private $idSujet;


}

