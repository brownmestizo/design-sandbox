<?php

namespace MB\Cart;


class Product
{
    const REGULAR_SIZE = 1;
    const SMALL_SIZE = 2;
    const SMALL_PRICE = 140;

    private $id;
    private $name;
    private $price;
    private $photo;
    private $size;

    public function __construct($id, $name, $price, $photo, $size)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->size == self::SMALL_SIZE ? self::SMALL_PRICE : $this->price;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}