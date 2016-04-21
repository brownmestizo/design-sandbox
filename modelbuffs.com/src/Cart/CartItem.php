<?php

namespace MB\Cart;


class CartItem
{
    /** @var Product */
    private $product;
    /** @var Stand */
    private $stand;
    /** @var int */
    private $quantity;
    /** @var string */
    private $id;
    
    public function __construct(Product $product, Stand $stand, $quantity)
    {
        $this->id = bin2hex(\random_bytes(4));
        $this->product = $product;
        $this->stand = $stand;
        $this->quantity = $quantity;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return Stand
     */
    public function getStand()
    {
        return $this->stand;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function totalPrice()
    {
        return $this->quantity * ($this->product->getPrice() + $this->stand->getPrice());
    }

    public function price()
    {
        return $this->product->getPrice() + $this->stand->getPrice();
    }

    public function changeQty($newQty)
    {
        $this->quantity = $newQty;
    }
}