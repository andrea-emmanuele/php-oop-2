<?php
require_once 'Auth.php';

class User
{
    use Auth;
    private $id;
    private $name;
    private $lastname;
    private $date_of_birth;
    private $creditCards = [];
    private $cart = [];

    public function __construct($id, $name, $lastname, $date_of_birth, $username, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->date_of_birth = $date_of_birth;
        $this->$username = $username;
        $this->$password = $password;
    }

    public function setCreditCards($creditCard) {
        array_push($this->cart, $creditCard);
    }

    public function addToCart($product, $qty) {
        $this->cart[] = [
            'product' => $product,
            'qty' => $qty
        ];
    }
}