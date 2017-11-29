<?php

namespace WardLeonard\DiscoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DiskType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class, array(
            'label' => 'form.disk.title',
            'trim' => true,
            'attr' => array(
                'class' => 'input',
                'placeholder' => 'saisir un titre'
        ))->add('dateSortie', DateType::class, array(
            'label' => 'form.disk.date',
            'trim' => true,
            'attr' => array(
                'class' => 'input',
                'placeholder' => 'saisir une année de sortie'
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WardLeonard\DiscoBundle\Entity\Disk'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wardleonard_discobundle_disk';
    }


}
