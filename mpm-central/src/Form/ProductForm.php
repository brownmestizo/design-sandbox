<?php

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prod_name', TextType::class, [
                'label' => 'Product name'
            ])
            ->add('prod_code', TextType::class, [
                'label' => 'Product code'
            ])
            ->add('mb', MyCheckBoxType::class, [ // checkbox should be transformed to 1 or nil
                'label' => 'Modelbuffs',
                'required' => false,
            ])
            ->add('pa', MyCheckBoxType::class, [ // checkbox should be transformed to 1 or nil
                'required' => false,
                'label' => 'Planearts'
            ])
            ->add('m3', MyCheckBoxType::class, [ // checkbox should be transformed to 1 or nil
                'required' => false,
                'label' => 'M3'
            ])
            ->add('prod_category', ChoiceType::class, [
                'label' => 'Category',
                'placeholder' => 'Select a category',
                'choices' => $options['categories'],
                'choices_as_values' => true
            ])
            ->add('prod_era', ChoiceType::class, [
                'label' => 'Category',
                'placeholder' => 'Select an era',
                'choices' => $options['eras'],
                'choices_as_values' => true
            ])
            ->add('prod_alt', TextType::class, [ // prod_alt should be split into prod_alt1, prod_alt2, prod_alt3, prod_alt4
                'label' => 'Alternative names',
                'attr' => ['placeholder' => 'Separate alternative names by a comma']
            ])
            ->add('prod_aircraftreg', TextType::class, [
                'label' => 'Aircraft registration',
            ])
            ->add('prod_company', TextType::class, [
                'label' => 'Model company',
            ])
            ->add('prod_links', TextType::class, [
                'label' => 'Related link',
                'attr' => ['placeholder' => 'URI of a related link']
            ])
            ->add('prod_linkdescription', TextType::class, [
                'label' => 'Related text',
                'attr' => ['placeholder' => 'Text that will appear as link']
            ])
            ->add('prod_general', ChoiceType::class, [
                'label' => 'Generic description',
                'placeholder' => 'Select a category of description',
                'choices' => $options['genericDescriptions'],
                'choices_as_values' => true
            ])
            ->add('prod_writeup', TextType::class, [
                'label' => 'Custom description',
                'attr' => ['placeholder' => 'Description']
            ])
            ->add('prod_length', TextType::class, [
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('prod_wingspan', TextType::class, [
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('prod_height', TextType::class, [
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('prod_scale', TextType::class, [
                'label' => '',
                'attr' => ['placeholder' => '']
            ])
            ->add('prod_title', TextType::class, [
                'label' => 'Page title',
                'attr' => ['placeholder' => 'Custom text that will append the page title']
            ])
            ->add('prod_description', TextType::class, [
                'label' => 'Meta description',
                'attr' => ['placeholder' => 'Custom text that will appear in the <description> tag']
            ])
            ->add('prod_keywords', TextType::class, [
                'label' => 'Keywords',
                'attr' => ['placeholder' => 'Custom keywords that will append the product\'s automatically generated keywords']
            ])
            ->add('prod_price_id', ChoiceType::class, [
                'label' => 'Pricing category',
                'placeholder' => 'Select a pricing category',
                'choices' => $options['pricingCategories'],
                'choices_as_values' => true
            ])
            ->add('tbl_prod_prices', PricesForm::class, [ // this field will be saved in tbl_prod_prices against prod_id
                'label' => 'Regular price (Optional)',
                'required' => false,
                'attr' => ['placeholder' => 'This will override the regular price selected in the Pricing Category field']
            ])
            ->add('prod_category_shipping', ChoiceType::class, [
                'label' => 'Shipping category',
                'placeholder' => 'Select a shipping category',
                'choices' => $options['shippingCategories'],
                'choices_as_values' => true
            ])
            ->add('tbl_prod_smaller', SmallProdForm::class, [ //  this would be saved in tbl_prod_smaller against the prod_id of this product
                'shippingCategories' => $options['shippingCategories'],
                'pricingCategories' => $options['pricingCategories'],
            ])
            ->add('photos', PhotosForm::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired([
            'shippingCategories',
            'pricingCategories',
            'genericDescriptions',
            'eras',
            'categories'
        ])->setDefaults([
            'method' => 'POST',
            'data_class' => \TblProdInfo::class
        ]);
    }


}