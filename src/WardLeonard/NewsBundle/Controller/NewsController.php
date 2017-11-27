<?php

namespace WardLeonard\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WardLeonard\NewsBundle\Entity\News;

class NewsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('WardLeonardNewsBundle:News')->findAll();

        return $this->render('WardLeonardNewsBundle:Home:index.html.twig', array('news'=>$news));
    }
}
