<?php
    interface Authentication{
        public function login($email,$password):bool;
        public function logout():void;
    }
?>