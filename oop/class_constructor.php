<?php

class User {
    public $username;
    public function __construct($value) {

        $this->username = $value;

    }
    
    public function setUsername(){
        echo $this->username;
    }

}


$user = new User('johnn');

echo $user->username;