<?php

namespace WardLeonard\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use WardLeonard\NewsBundle\Entity\News;
use WardLeonard\NewsBundle\Form\NewsType;

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

    /**
     * @Route("/admin/add")
     */
    public function addAction(Request $request){
        $form = $this->createForm(NewsType::class, new News(), array(
              'attr' => array(
                  'class' => 'form'
              )
        ))
            ->add('submit', SubmitType::class, array(
                'label' => 'form.news.save'
            ))
            ->add('reset', ResetType::class, array(
                'label' => 'form.news.reset'
            ));

         return $this->render('WardLeonardNewsBundle:Back:add.html.twig', array(
             'form_add' => $form->createView()
         ));
    }




}
