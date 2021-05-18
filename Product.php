<?php

class Product
{
    private $cod;
    private $name;
    private $description;
    private $price;
    private $availability;

    public function __construct($cod, $name, $description, $price, $availability)
    {
        $this->cod = $cod;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;
    }

    public function getCod()
    {
        return $this->cod;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setCod($cod): void
    {
        $this->cod = $cod;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function setAvailability($availability): void
    {
        $this->availability = $availability;
    }
}