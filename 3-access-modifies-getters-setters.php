<?php

class Car{
    private $brand;
    private $price;

    public function __construct($brand, $price)
    {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        return $this->brand = $brand;
    }

    // __get magic method
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    // __set magic method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }
}


$car1 = new Car("Proton", 20000);
$car2 = new Car("Waja", 20000);

// echo $car1->getBrand();
// echo "<br><br>";
// echo $car1->setBrand('Axia');


$car1->__set('brand', 'Mercedes');

echo $car1->__get('brand');
echo "<br>";
echo $car2->__get('brand');
