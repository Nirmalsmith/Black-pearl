<?php
class Car {
    public $make;
    public $model;
    public $color;

    // Constructor
    public function __construct($make, $model, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
    }

    // Methods
    public function startEngine() {
        echo "Engine started!";
    }

    public function stopEngine() {
        echo "Engine stopped!";
    }
}

// Creating an object with constructor parameters
// $myCar = new Car("Toyota", "Camry", "Blue")
?>