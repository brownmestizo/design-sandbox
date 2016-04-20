<?php

namespace MB\Cart;

class ChangeQuantityUseCase
{
    /**
     * @var CartStorage
     */
    private $cs;
    private $id;
    private $quantity;

    public function __construct(CartStorage $cs, $id, $quantity)
    {
        $this->cs = $cs;
        $this->id = $id;
        $this->quantity = $quantity;
    }

    public function execute()
    {
        $cart = $this->cs->load();
        $cart->changeItemQuantity($this->id, $this->quantity);
        $this->cs->save($cart);
    }
}