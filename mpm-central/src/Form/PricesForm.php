<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PricesForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prod_normalprice', TextType::class, [ // this field will be saved in tbl_prod_prices against prod_id
                'label' => 'Regular price (Optional)',
                'required' => false,
                'attr' => ['placeholder' => 'This will override the regular price selected in the Pricing Category field']
            ])
            ->add('prod_salesprice', TextType::class, [ // this field will be saved in tbl_prod_prices against prod_id
                'label' => 'Sales price (Optional)',
                'required' => false,
                'attr' => ['placeholder' => 'This will override any regular price against this product']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'method' => 'POST',
            'data_class' => \TblProdPrices::class
        ]);
    }


}