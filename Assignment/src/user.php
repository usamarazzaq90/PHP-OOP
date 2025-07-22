<?php
include './authentication.php'; //Including interface in this file

//Creating a parent User class, and making it abstract to define abstract methods in children
abstract class User implements Authentication{
    public $name;
    public $email;

    function __construct($name,$email){
        $this->name=$name;
        $this->email=$email;
    }

    function displayInfo(){
        echo "Name: $this->name <br>Email: $this->email <br>";
    }

    //The abstract methods are declared here,they'll be defined in children classes
    abstract public function login($email,$password):bool;
    abstract public function logout():void;
}
