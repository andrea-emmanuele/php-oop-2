<?php

class CreditCard
{   private $pan;
    private $cvv;
    private $expiration_date;
    private $holder;
    private $circuit;

    public function __construct($pan, $cvv, $expiration_date, $holder, $circuit) {
        $this->pan = $pan;
        $this->cvv = $cvv;
        $this->expiration_date = $expiration_date;
        $this->holder = $holder;
        $this->circuit = $circuit;
    }

    public function getPan()
    {
        return $this->pan;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function getCircuit()
    {
        return $this->circuit;
    }

    public function setPan($pan)
    {
        $this->pan = $pan;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    public function setHolder($holder)
    {
        $this->holder = $holder;
    }

    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;
    }
}