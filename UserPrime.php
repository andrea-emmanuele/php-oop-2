<?php

class UserPrime extends User
{
    private $renewal_date;
    private $automatic_renewal;

    public function __construct($id, $name, $lastname, $date_of_birth, $username, $password, $renewal_date, $automatic_renewal)
    {
        parent::__construct($id, $name, $lastname, $date_of_birth, $username, $password);
        $this->renewal_date = $renewal_date;
        $this->automatic_renewal = $automatic_renewal;
    }

    public function getRenewalDate()
    {
        return $this->renewal_date;
    }

    public function getAutomaticRenewal()
    {
        return $this->automatic_renewal;
    }

    public function setRenewalDate($renewal_date): void
    {
        $this->renewal_date = $renewal_date;
    }

    public function setAutomaticRenewal($automatic_renewal): void
    {
        $this->automatic_renewal = $automatic_renewal;
    }
}