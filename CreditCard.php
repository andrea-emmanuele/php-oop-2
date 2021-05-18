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
}