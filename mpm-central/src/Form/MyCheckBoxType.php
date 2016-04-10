<?php

namespace Form;


use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class MyCheckBoxType extends CheckboxType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Unlike in other types, where the data is NULL by default, it
        // needs to be a Boolean here. setData(null) is not acceptable
        // for checkboxes and radio buttons (unless a custom model
        // transformer handles this case).
        // We cannot solve this case via overriding the "data" option, because
        // doing so also calls setDataLocked(true).
        $builder->setData(isset($options['data']) ? $options['data'] : false);
        $builder->addViewTransformer(new MyBooleanTransformer($options['value']));
    }
}