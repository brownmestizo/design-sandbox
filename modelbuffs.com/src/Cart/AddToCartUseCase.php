<?php

namespace MB\Cart;

class AddToCartUseCase
{
    /**
     * @var CartStorage
     */
    private $cs;
    /**
     * @var \TblProdInfo
     */
    private $product;
    /**
     * @var \TblStands
     */
    private $stand;
    private $quantity;
    private $size;

    public function __construct(CartStorage $cs, \TblProdInfo $product, \TblStands $stand, $quantity, $size)
    {
        $this->cs = $cs;
        $this->product = $product;
        $this->stand = $stand;
        $this->quantity = $quantity;
        $this->size = $size;
    }

    public function execute()
    {
        $product = new Product(
            $this->product->getProdId(),
            $this->product->getProdName(),
            $this->product->getTblProdPricing()->getProdPricePrice(), 
            $this->product->getTblProdPhotos()->getProdSolo1(),
            $this->size,
            $this->product->getTblShippingCategories()->getWeightIde(),
            $this->product->getTblShippingCategories()->getWeightIdp()
        );
        $stand = new Stand($this->stand->getStandId(), $this->stand->getStandName(), $this->stand->getStandPrice());
        $cart = $this->cs->load();
        $cart->addItem(new CartItem($product, $stand, $this->quantity));
        $this->cs->save($cart);
    }
}