<?php

require_once __DIR__ ."/CreditCard.php";

class User {

    public $name;
    public $email;
    public $password;
    public $creditCard;

    public function __construct( string $name, string $email, string $password, CreditCard $creditCard ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->creditCard = $creditCard;
    }
}

$userTwo = new User('');