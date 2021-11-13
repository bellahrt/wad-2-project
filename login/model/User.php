<?php

class User {
    private $username;
    private $passwordHash;
    private $email;

    function __construct($username, $passwordHash, $email) {
        $this->username = $username;
        $this->passwordHash = $passwordHash;
        $this->email = $email;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPasswordHash(){
        return $this->passwordHash;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPasswordHash($hashed){
        $this->passwordHash = $hashed;
    }

   
}
