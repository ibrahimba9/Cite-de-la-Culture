<?php

namespace Cite\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CiteUserBundle:Default:index.html.twig');
    }
}
