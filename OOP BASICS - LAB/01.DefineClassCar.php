<?php
namespace DefineClassCar;
class Car{
    public $brand;
    public $model;
    public $year;
}

$firstCar = new Car();
$firstCar->brand= 'Aston Martin';
$firstCar->model= 'Vanquish Zagato';
$firstCar->year ='2018';

$secondCar = new Car();
$secondCar->brand= 'BMW';
$secondCar->model= 'i8';
$secondCar->year ='2015';

$thirdCar = new Car();
$thirdCar->brand= 'Mazerati';
$thirdCar->model= 'Gran Turismo';
$thirdCar->year ='2017';

print_r($firstCar);
print_r($secondCar);
print_r($thirdCar);
