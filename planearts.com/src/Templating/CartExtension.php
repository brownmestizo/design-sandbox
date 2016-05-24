<?php

namespace MB\Templating;


use MB\Cart\SessionCartStorage;

class CartExtension extends \Twig_Extension
{
    private $cs;

    public function __construct()
    {
        $this->cs = new SessionCartStorage();
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get_cart', [$this, 'getCart']),
        ];
    }

    public function getCart()
    {
        return $this->cs->load();
    }

    public function getName()
    {
        return 'cart';
    }
}