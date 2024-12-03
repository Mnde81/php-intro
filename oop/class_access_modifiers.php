<?php

class User {
    public $name = "John";
    protected $email = 'john@john.com';
    private $password = 'sample';

    public function displayEmail() {
        return $this->email;
    }

    public function displayPassword(){
        return $this->password;
    }

}





class AdminUser extends User{
    public function getEmailAgain() {
        return $this->email . "From Admin Class";
    }

    public function displayFromAdmin() {
        return $this->email;
    }

}

// $user = new User();

// echo $user->displayPassword();

$admin = new AdminUser();
echo $admin->displayFromAdmin();


// echo $admin->getEmailAgain(); 