<?php

class Student{
    public $name;
    public $age;

    // Can only access in class
    // private $name;
    // private $age;


    // magic methods
    // Runs when object istantiate
    public function __construct($name, $age)
    {
        // magic constants
        echo "Class " . __CLASS__ . " instantiated";
        echo "<br>";
        echo 'Construtor ran...';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name . " " . "Says Hello";
    }

    // Called when no other references to a certain pbject
    // User for cleanup, closing connections, etc
    public function __destruct()
    {
        echo "destructor ran...";
    }
}

$student1 = new Student('Haikal', 32);
echo "<br>";
echo $student1->name . " " . "is" . " " . $student1->age . " " . "years old.";
echo "<br>";
echo $student1->sayHello();

echo "<br><br>";

$student2 = new Student('Fitriah', 33);
echo "<br>";
echo $student2->name . " " . "is" . " " . $student2->age . " " . "years old.";
echo "<br>";
echo $student2->sayHello();

echo "<br><br>";



