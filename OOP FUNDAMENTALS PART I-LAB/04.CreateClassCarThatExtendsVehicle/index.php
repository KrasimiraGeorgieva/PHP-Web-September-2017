<?php
declare(strict_types = 1);
require_once 'Vehicle.php';
require_once 'Car.php';

$myCar = new Car('Red', 'Audi', 'A4', '2016', '4');
$myCar->changeNumberDoors(' ');
print_r($myCar);
/*
 * Car Object
Car Object
(
    [brand:Car:private] => Audi
    [model:Car:private] => A4
    [color:Car:private] =>
    [numberDoors:Vehicle:private] =>
    [color:Vehicle:private] => Red
    [numDoors] => 4
    [year] => 2016
)
 */