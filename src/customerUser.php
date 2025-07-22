<?php
require_once './user.php';

class CustomerUser extends User{
    public function login($email,$password):bool{
        echo "Customer $this->name logged in. <br>";
        return true;
    }

    public function logout():void{
        echo "Customer $this->name logged out. <br>";
    }

    public function purchase():void{
        echo "Customer $this->name is purchasing items.<br>";
    }
}

?>