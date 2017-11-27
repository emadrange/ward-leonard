<?php

namespace WardLeonard\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('WardLeonardNewsBundle:Home:index.html.twig');
    }
}
