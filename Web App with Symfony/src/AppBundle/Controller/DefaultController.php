<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER') and !$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->render('default/index.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]);
        }

        if ($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN') ){
            return $this->redirectToRoute('cite_back_homepage');
        }

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER') ){
            return $this->render('default/index.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]);
        }
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function indexBackAction(Request $request)
    {
        return $this->render('@CiteForum/Back/baseBack.html.twig');
    }
}
