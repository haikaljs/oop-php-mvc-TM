<?php

class Customer {
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else{
            return false;
        }
    }
}

$password = "hello world";
if(Customer::validatePass($password)){
    echo "Password valid";
}else{
    echo "Password not valid";
}