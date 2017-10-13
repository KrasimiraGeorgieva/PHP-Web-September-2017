<?php
declare(strict_types = 1);

require 'IArea.php';
require 'Circle.php';

//$myCircle with radius 10 mm.
$input = explode(' ', trim(fgets(STDIN)));
$radius = $input[3];

$circle = new Circle(floatval($radius));
echo"Circle, radius = " . $radius .' mm, area = ' . $circle->getSurface() ." mm.";