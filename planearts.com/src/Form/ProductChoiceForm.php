<?php

namespace MB\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductChoiceForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity', ChoiceType::class, [
                'label' => false,
                'choices' => array_combine(range(1, 6), range(1, 6)),
            ])
            ->add('product', ChoiceType::class, [
                'choices_as_values' => true,
                'choices' => [
                    $options['price'] => 1,
                    'Smaller model ($140.00)' => 2
                ],
                'label' => 'Model size',
            ])
            ->add('stand', ChoiceType::class, [
                'choices_as_values' => true,
                'choices' => $options['stands'],
                'label' => 'Stand (additional cost)',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
                'data_class' => ProductChoiceDTO::class,
            ])
            ->setRequired(['stands', 'price']);
    }
}