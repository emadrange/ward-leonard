<?php

namespace WardLeonard\DiscoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
    /**
     * @Route("/liste")
     */
    public function listeAction()
    {
        return $this->render('WardLeonardDiscoBundle:FrontController:liste.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/liste/unique")
     */
    public function uniqueAction()
    {
        return $this->render('WardLeonardDiscoBundle:FrontController:unique.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/liste/paroles")
     */
    public function parolesAction()
    {
        return $this->render('WardLeonardDiscoBundle:FrontController:paroles.html.twig', array(
            // ...
        ));
    }

}
