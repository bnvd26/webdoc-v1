<?php

namespace App\Form;

use App\Entity\ChapterOne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Form\ImageType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ChapterOneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('imageBackground')
            ->add('music')
            ->add('content')
            ->add('filename')
            ->add('content1')
            ->add('content2')
            ->add('content3')
            ->add('content4')
            ->add('content5')
            ->add('content6')
            ->add('content7')
            ->add('content8')
            ->add('content9')
            ->add('content10')
            ->add('content11')
            ->add('content12')
            ->add('content13')
            ->add('content14')
            
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ChapterOne::class,
            "allow_extra_fields" => true
        ]);
    }
}
