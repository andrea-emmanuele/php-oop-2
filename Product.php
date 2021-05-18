<?php

class Product
{
    private $cod;
    private $name;
    private $description;
    private $availability;

    public function __construct($cod, $name, $description, $availability)
    {
        $this->cod = $cod;
        $this->name = $name;
        $this->description = $description;
        $this->availability = $availability;
    }
}