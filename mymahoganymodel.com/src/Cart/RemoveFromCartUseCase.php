<?php

namespace MB\Cart;


class RemoveFromCartUseCase
{
    /**
     * @var CartStorage
     */
    private $cs;
    private $id;

    public function __construct(CartStorage $cs, $id)
    {
        $this->cs = $cs;
        $this->id = $id;
    }

    public function execute()
    {
        $cart = $this->cs->load();
        $cart->removeItem($this->id);
        $this->cs->save($cart);
    }
}