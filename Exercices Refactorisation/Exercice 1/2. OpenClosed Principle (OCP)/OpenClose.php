<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

abstract class Vehicle 
{
    protected $vehicle;
    public function __construct($vehicle) {
        $this->vehicle = $vehicle;
    }

    abstract public function run();
}

class Motorcycle extends Vehicle
{
    public function run() {
        echo 'Turning on the motorcycle';
    }
}

class Car extends Vehicle
{
    public function run() {
        echo 'Turning on the car';
    }
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        return $vehicle->run();
    }
}
