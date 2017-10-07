<?php
declare(strict_types = 1);

require_once 'Vehicle_6.php';
require_once 'Car_6.php';

$myCar = new Car_6('Red','4', 'A4', 'Audi', '2016');
$myCar->paint('Green');
print_r($myCar);

//$myCar->color = 'Black';
//print_r($myCar);
//Result:
//Fatal error: Uncaught Error: Cannot access protected property Car_6::$color