<?php

// echo 'test';

// define a class
class User {
    // Properties (attributes)
    // public $name = "Haikal Rozhan";
    public $name;
    // Methods (functions)
    public function sayHello(){
        return $this->name . " " . "says hello";
    }
}

// Instantiate user object
$user1 = new User();
$user1->name = "Haikal";
echo '<br>';
echo $user1->sayHello();

echo '<br>';
echo '<br>';
echo '<br>';

// Create new user
$user2 = new User();
$user2->name = "Fitriah";
echo '<br>';
echo $user2->sayHello();

