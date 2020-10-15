<?php

namespace Cite\ForumBundle\Controller;

use Cite\ForumBundle\Entity\Recherche;
use Cite\ForumBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('CiteForumBundle:Sujets')->findAll();
        foreach ($sujets as $s){
            $s->setNbrMessages( $em->getRepository('CiteForumBundle:Messages')->getNombreMessages($s->getIdSujet()) );
            $s->setNbrParticipants( $em->getRepository('CiteForumBundle:Messages')->getNombreParticipants($s->getIdSujet()) );
        }
        $sujPag = $this->get('knp_paginator')->paginate(
            $sujets,
            $request->query->get('page',1),
            5
        );

        $recherche = new Recherche();
        $form = $this->createForm(RechercheType::class, $recherche);
        $form->handleRequest($request);
        if($form->isSubmitted()){

            if($recherche->getTheme() == null and $recherche->getTitre()==null and $recherche->getAuteur()==null){
                return $this->redirectToRoute('cite_forum_homepage');
            }

            if ($recherche->getTheme() == null and $recherche->getTitre()==null and $recherche->getAuteur()!=null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchAuteur($recherche->getAuteur());

            }

            if ($recherche->getTheme() == null and $recherche->getTitre()!=null and $recherche->getAuteur()==null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitre($recherche->getTitre());
            }

            if ($recherche->getTheme() != null and $recherche->getTitre()==null and $recherche->getAuteur()==null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchTheme($recherche->getTheme());

            }

            if ($recherche->getTheme() != null and $recherche->getTitre()!=null and $recherche->getAuteur()==null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreTheme($recherche->getTitre(),$recherche->getTheme());
            }

            if ($recherche->getTheme() == null and $recherche->getTitre()!=null and $recherche->getAuteur()!=null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreAuteur($recherche->getTitre(),$recherche->getAuteur());
            }

            if ($recherche->getTheme() != null and $recherche->getTitre()==null and $recherche->getAuteur()!=null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchThemeAuteur($recherche->getTheme(),$recherche->getAuteur());
            }

            if ($recherche->getTheme() != null and $recherche->getTitre()!=null and $recherche->getAuteur()!=null){

                $results = $em->getRepository('CiteForumBundle:Sujets')->searchTitreThemeAuteur($recherche->getTheme(),$recherche->getTitre(),$recherche->getAuteur());
            }

            $resultsP = $this->get('knp_paginator')->paginate(
                $results,
                $request->query->get('page',1),
                5
            );
            return $this->render('@CiteForum/Default/index.html.twig', array(
                'liste' => $resultsP,
                'form' => $form->createView()
            ));

        }
        return $this->render('@CiteForum/Default/index.html.twig', array(
            'liste' => $sujPag,
            'form' => $form->createView()
        ));
    }
}
