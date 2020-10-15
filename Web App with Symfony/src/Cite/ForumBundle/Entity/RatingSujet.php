<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/05/2019
 * Time: 21:16
 */

namespace Cite\ForumBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * RatingSujet
 *
 * @ORM\Table(name="rating_sujet", indexes={@ORM\Index(name="fk_sujet_rating", columns={"ID_Sujet"}), @ORM\Index(name="fk_abonne_rating", columns={"ID_Abonne"})})
 * @ORM\Entity(repositoryClass="Cite\ForumBundle\Repository\RatingSujetRepository")
 */
class RatingSujet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="Cite\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idAbonne;

    /**
     * @var \Sujets
     *
     * @ORM\ManyToOne(targetEntity="Sujets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Sujet", referencedColumnName="ID_Sujet", onDelete="CASCADE")
     * })
     */
    private $idSujet;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return RatingSujet
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set idAbonne
     *
     * @param \Cite\UserBundle\Entity\User $idAbonne
     *
     * @return RatingSujet
     */
    public function setIdAbonne(\Cite\UserBundle\Entity\User $idAbonne = null)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    /**
     * Get idAbonne
     *
     * @return \Cite\UserBundle\Entity\User
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    /**
     * Set idSujet
     *
     * @param \Cite\ForumBundle\Entity\Sujets $idSujet
     *
     * @return RatingSujet
     */
    public function setIdSujet(\Cite\ForumBundle\Entity\Sujets $idSujet = null)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get idSujet
     *
     * @return \Cite\ForumBundle\Entity\Sujets
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }
}
