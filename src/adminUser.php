<?php
require_once './user.php';

class AdminUser extends User{
    public function login($email,$password):bool{
        echo "Admin $this->name logged in. <br>";
        return true;
    }

    public function logout():void{
        echo "Admin $this->name logged out. <br>";
    }

    public function manage():void{
        echo "User $this->name is managing users.<br>";
    }
}
?>