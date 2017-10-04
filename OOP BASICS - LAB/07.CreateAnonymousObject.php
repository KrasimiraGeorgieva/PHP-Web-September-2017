<?php
$car = new stdClass();
$car->brand = 'Audi';
$car->model = 'A3';
$car->color = 'blue';
$car->engine = '2.0 TDI';
$car->maxSpeed = '207 km/h';
$car->enginePosition = 'front';
$car->fuelType = 'diesel';
$car->fuelEconomy = '5.5 l/100 km';
$car->doors = '5';
$car->weight = '1370 kg';

foreach ($car as $name => $value){
    echo $name . '->' . $value . "\r\n";
}