<?php

namespace Cite\ForumBundle\Entity;


class MotsMasques
{

    private $mot;


    public function setMot($mot)
    {
        $this->mot = $mot;

        return $this;
    }

    public function getMot()
    {
        return $this->mot;
    }
}
