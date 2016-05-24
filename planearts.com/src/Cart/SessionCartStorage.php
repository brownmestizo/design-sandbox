<?php

namespace MB\Cart;


use Symfony\Component\HttpFoundation\Session\Session;

class SessionCartStorage implements CartStorage
{
    const CART_KEY = 'cart_session_mb';
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function save(Cart $cart)
    {
        $this->session->set(self::CART_KEY, serialize($cart));
        $this->session->save();
    }

    public function load()
    {
        $cartStr = $this->session->get(self::CART_KEY, null);
        return $cartStr ? unserialize($cartStr) : new Cart();
    }
}