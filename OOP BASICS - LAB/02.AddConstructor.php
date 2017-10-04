<?php
namespace AddConstructor;
class Car{
    public $brand;
    public $model;
    private $year;

    function __construct()
    {
        $this->brand = '';
        $this->model = '';
    }
}

$myCar = new Car();
$myCar->brand= 'Aston Martin';
$myCar->model= 'Vanquish Zagato';

print_r($myCar);
