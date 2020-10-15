<?php

namespace Cite\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CiteForumBundle:Default:index.html.twig');
    }
}
