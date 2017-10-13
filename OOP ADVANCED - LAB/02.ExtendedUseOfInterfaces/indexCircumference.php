<?php
declare(strict_types = 1);

require 'ICircumference.php';
require '..\01.BasicUseOfInterfaces\IArea.php';
require '..\01.BasicUseOfInterfaces\Circle.php';

//$myCircle with radius 10 mm.
$input = explode(' ', trim(fgets(STDIN)));
$radius = $input[3];

$circle = new Circle(floatval($radius));

echo 'Circle with radius = ' . $radius .' mm:'. "\r\n";
echo 'Area = '. $circle->getSurface() .' mm'. "\r\n";
echo 'Circumference = '. $circle->getCircumference() .' mm';