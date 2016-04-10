<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhotosForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('p1', FileType::class, [
                'label' => 'Photo 1',
            ])
            ->add('p2', FileType::class, [
                'label' => 'Photo 2',
                'required' => false,
            ])
            ->add('p3', FileType::class, [
                'label' => 'Photo 3',
                'required' => false,
            ])
            ->add('p4', FileType::class, [
                'label' => 'Photo 4',
                'required' => false,
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'method' => 'POST',
            'data_class' => UploadedPhotos::class
        ]);
    }


}