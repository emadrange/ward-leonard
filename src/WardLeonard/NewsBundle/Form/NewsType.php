<?php

namespace WardLeonard\NewsBundle\Form;


use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array(
                'label' => 'form.news.title',
                'placeholder' => 'saisir un titre',
                'attr' => array(
                 'class' => 'input'
                )
            ))->add('content', TextareaType::class, array(
                'label' => 'form.news.content',
                'attr' => array(
                    'rows' => 5,
                    'cols' => 40,
                    'style' => 'color:red;background-color:#F0F8FF'
                )
            ))
            ->add('author', TextType::class, array(
                'label' => 'form.news.author'
            ))
            ->add('video', TextType::class,array(
                'label' => 'form.news.video'
            ))
            ->add('photo',FileType::class, array(
                'label' => 'form.news.photo'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WardLeonard\NewsBundle\Entity\News',
            'translation_domain' => 'messages'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wardleonard_newsbundle_news';
    }


}
