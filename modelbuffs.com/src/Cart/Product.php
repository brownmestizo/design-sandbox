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
    private $weightE;
    private $weightP;

    public function __construct($id, $name, $price, $photo, $size, $weightE, $weightP)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
        $this->size = $size;
        $this->weightE = $weightE;
        $this->weightP = $weightP;
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

    /**
     * @return mixed
     */
    public function getWeightEconomy()
    {
        return $this->weightE;
    }

    /**
     * @return mixed
     */
    public function getWeightPriority()
    {
        return $this->weightP;
    }
}