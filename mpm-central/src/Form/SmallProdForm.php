<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SmallProdForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sm_prod_length', TextType::class, [ //  this would be saved in tbl_prod_smaller against the prod_id of this product
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('sm_prod_wingspan', TextType::class, [ // this would be saved in tbl_prod_smaller against the prod_id of this product
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('sm_prod_height', TextType::class, [ //  this would be saved in tbl_prod_smaller against the prod_id of this product
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('sm_prod_scale', TextType::class, [ // this would be saved in tbl_prod_smaller against the prod_id of this product
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('sm_prod_price_id', ChoiceType::class, [
                'label' => 'Pricing category',
                'placeholder' => 'Select a pricing category',
                'choices' => $options['pricingCategories'],
                'choices_as_values' => true
            ])
            ->add('sm_prod_normalprice', TextType::class, [ // this field will be saved in tbl_prod_prices against prod_id
                'label' => 'Regular price (Optional)',
                'required' => false,
                'attr' => ['placeholder' => 'This will override the regular price selected in the Pricing Category field']
            ])
            ->add('sm_prod_shipping_price_id', ChoiceType::class, [
                'label' => 'Shipping category',
                'placeholder' => 'Select a shipping category',
                'choices' => $options['shippingCategories'],
                'choices_as_values' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'shippingCategories',
                'pricingCategories',])
            ->setDefaults([
                'method' => 'POST',
                'data_class' => \TblProdSmaller::class
            ]);
    }


}