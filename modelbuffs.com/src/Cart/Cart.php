<?php

namespace MB\Cart;

class Cart
{
    /** @var CartItem[] */
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem(CartItem $cartItem)
    {
        $this->items[] = $cartItem;
    }

    public function removeItem($id)
    {
        $this->items = array_filter($this->items, function (CartItem $item) use ($id) {
            return $item->getId() != $id;            
        });
    }

    public function changeItemQuantity($id, $qty)
    {
        foreach ($this->items as $item) {
            if ($item->getId() == $id) {
                $item->changeQty($qty);
                break;
            }
        }
    }

    public function price()
    {
        return array_reduce($this->items, function ($r, CartItem $ci) {
            return $r + $ci->price();
        }, 0);
    }
}