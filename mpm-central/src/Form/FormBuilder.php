<?php

namespace Form;

use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Validator\Validation;

class FormBuilder
{
    private $formFactory;

    function __construct($twig)
    {
        // create the validator - details will vary
        $validator = Validation::createValidator();

        $defaultFormTheme = 'form/form_layout.html.twig';

        $formEngine = new TwigRendererEngine([$defaultFormTheme]);
        $formEngine->setEnvironment($twig);
        $twig->addExtension(
            new FormExtension(new TwigRenderer($formEngine/*, $csrfProvider*/))
        );

        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension($validator))
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $this->formFactory = $formFactory;
    }

    public function getForm($form, $data = null, $params = [])
    {
        return $this->formFactory->create($form, $data, $params);
    }

    public function makeChoice($arr, $nameMethod, $valMethod)
    {
        $res = [];
        foreach ($arr as $elem) {
            $res[$elem->$nameMethod()] = $elem->$valMethod();
        }

        return $res;
    }
}