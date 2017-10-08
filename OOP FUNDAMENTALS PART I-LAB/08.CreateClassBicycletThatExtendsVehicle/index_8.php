<?php
declare(strict_types = 1);

require 'Vehicle_8.php';
require 'Bicycle_8.php';

$b1 = new Bicycle_8('blue', 'Scott','Speedster', 2015);
$b1->setForSkirt(0);
$b1->setRideStop(1);
echo($b1);

$b2 = new Bicycle_8('white','Cross', 'Tierra', 2014);
$b2->setForSkirt(1);
//$b2->setForSkirt(0);
$b2->setRideStop(0);
echo($b2);