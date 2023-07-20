<?php

class Animal{
    protected $name = "Tot";
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Cat extends Animal{
    private $catSpecies;

    public function __construct($name, $age, $catSpecies)
    {
        parent::__construct($name,$age);
        $this->catSpecies = $catSpecies;
    }
    public function speak($sound){
        return $this->name . " speak " . $sound;
    }

    public function getSpecies(){
        return $this->catSpecies;
    }
}

$cat1 = new Cat("Tot", 5, "Parsi");
echo $cat1->speak("Meow");
echo "<br>";
echo $cat1->getSpecies();