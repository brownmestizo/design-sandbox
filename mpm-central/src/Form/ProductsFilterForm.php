<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsFilterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search', HiddenType::class)
            ->add('categories', ChoiceType::class, [
                'label' => 'Category',
                'placeholder' => 'Select a category',
                'choices' => $options['categories'],
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => true,
                'choices' => ['Active' => 'active', 'Inactive' => 'inactive']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired([
            'categories'
        ])->setDefaults([
            'data_class' => SearchDTO::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'search';
    }
}