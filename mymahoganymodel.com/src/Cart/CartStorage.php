<?php

namespace MB\Cart;


interface CartStorage
{
    public function save(Cart $cart);
    /**
     * @return Cart
     */
    public function load();
}