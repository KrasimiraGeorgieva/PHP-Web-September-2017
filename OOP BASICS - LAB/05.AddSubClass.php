<?php
namespace AddSubClass;
class Car{
    public $brand;
    public $model;
    public $year;


    function __construct($brand, $year, $engine, $numberOfSeats, $horsePower)
    {
        $this->brand = $brand;
        $this->model = new Model($engine, $numberOfSeats, $horsePower);
        $this->year = $year;
    }
}

class Model
{
    public $engine;
    public $numberOfSeats;
    public $horsePower;

    public function __construct($engine, $numberOfSeats, $horsePower)
    {
        $this->engine = $engine;
        $this->numberOfSeats = $numberOfSeats;
        $this->horsePower = $horsePower;
    }
}

$car = new Car('Audi', '2015','2.0 TDI', '5', '140');

print_r($car);