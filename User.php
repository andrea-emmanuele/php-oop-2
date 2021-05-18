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

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getCreditCards()
    {
        return $this->creditCards;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
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