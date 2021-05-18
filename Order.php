<?php

class Order
{
    private $id;
    private $cart = [];
    private $totalPrice;

    public function __construct($id, $cart)
    {
        $this->id = $id;
        $this->cart = $cart;
        $this->totalPrice = $this->calcTotalPrice($this->cart);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCart(): array
    {
        return $this->cart;
    }

    public function getTotalPrice(): float|int
    {
        return $this->totalPrice;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    private function calcTotalPrice($cart) {
        $tot = 0;

        foreach ($cart as $product) {
            $tot +=  $product['qty'] * $product['product']->getPrice();
        }

        return $tot;
    }
}