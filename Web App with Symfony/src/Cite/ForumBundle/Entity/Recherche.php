<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18/04/2019
 * Time: 04:03
 */

namespace Cite\ForumBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


class Recherche
{
    private $theme;
    private $titre;
    private $auteur;

    public function getTheme(){
        return $this->theme;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function setTitre($value){
        $this->titre = $value;
    }

    public function setTheme($value){
        $this->theme = $value;
    }

    public function setAuteur($value){
        $this->auteur = $value;
    }
}