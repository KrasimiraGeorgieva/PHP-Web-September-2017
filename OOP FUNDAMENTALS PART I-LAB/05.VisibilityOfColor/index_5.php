<?php
declare(strict_types = 1);

require_once 'Vehicle_5.php';
require_once 'Car_5.php';

$myCar = new Car_5('Red','4', 'A4', 'Audi', '2016');
print_r($myCar);
$myCar->paint('Green');
print_r($myCar);