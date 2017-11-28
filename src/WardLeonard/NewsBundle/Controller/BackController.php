<?php

namespace WardLeonard\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use WardLeonard\NewsBundle\Entity\News;
use WardLeonard\NewsBundle\Form\NewsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

class BackController extends Controller
{
    /**
     * @Route("/admin", name="back_news_liste")
     *
     */
    public function indexAction()
    {

        $repository = $this->getDoctrine()->getManager()->getRepository("WardLeonardNewsBundle:News");
        $news = $repository->findAll();

        return $this->render('WardLeonardNewsBundle:Back:index.html.twig', array('news' => $news
        ));
    }

    /**
     * @Route("/admin/add", name="back_news_add")
     * @Template
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

        $form->handleRequest($request);

        if($request->isMethod('POST') && $form->isValid())
        {
            $session = new Session();

            $session->getFlashBag()->add('notice', 'Bravo : News enregistrée');

            $em =$this->getDoctrine()->getManager();

            $news = $form->getData();
            $filePhoto = $form['photo']->getData();

            $news->setPhoto($filePhoto->getClientOriginalName());
            $em->persist($news);
            $em->flush();
            $filePhoto->move($this->getParameter('image_path'), $filePhoto->getClientOriginalName() );

            //$this->redirect($this->generateUrl('back_news_add'));
        }

         /*return $this->render('WardLeonardNewsBundle:Back:add.html.twig', array(
             'form_add' => $form->createView()
         ));*/

         return array('form_add' => $form->createView());
         // redirige vers add.html.twig qui récupère form_add
    }


    /**
     * @param Request $request
     * @param $id
     * @Route("/admin/delete/{id}", name="back_news_delete")
     */
    public function deleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("WardLeonardNewsBundle:News");

        $news = $repository->find($id);

        if($news !==null ) {
            $em->remove($news);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('back_news_liste'));
    }

}
