<?php

class User {
    private $name;
    private $email;

    public function __construct($name, $email)
    {

        $this->setEmail($email);
        // $this->name = $name;
        // $this->email = $email;
    }
    
        
    

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Not a valid email";
        }
    }


    public function displayUserInfo(){
        return "User: " . $this->getEmail();
    }



}


$user = new User('John', 'john@john.com');




$user->setEmail('john_updated@john.com');

echo $user->displayUserInfo() . "<br>";

$user->setEmail('john_updated_Again@john.com');

echo $user->displayUserInfo();