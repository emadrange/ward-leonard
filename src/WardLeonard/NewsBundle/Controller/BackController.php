<?php

namespace WardLeonard\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BackController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        return $this->render('WardLeonardNewsBundle:Back:index.html.twig', array(
            // ...
        ));
    }


}
