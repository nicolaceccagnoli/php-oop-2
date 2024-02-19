<?php

require_once __DIR__ ."/CreditCard.php";

class User {

    public $name;
    public $email;
    public $password;
    public $creditCard;

    // public function setPassword($password) {
    //     $specialCharsPattern = '/[^a-zA-Z0-9]/';

    //     if (preg_match($specialCharsPattern, $password)) {
    //         $this->password = $password;
    //     } else {
    //         echo "La password deve contenere almeno un carattere speciale.";
    //     }
    // }

    // public function getPassword() {
    //     return $this->password;
    // }

    // public function setEmail($email) {
    //     if (strpos($email, 'gmail.com') !== false) {
    //         $this->email = $email;
    //     } else {
    //         echo "L'email deve avere il dominio 'gmail.com'.";
    //     }
    // }

    // public function getEmail() {
    //     return $this->email;
    // }

    public function __construct( string $name, string $email, string $password, CreditCard $creditCard ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->creditCard = $creditCard;
    }
    
}

