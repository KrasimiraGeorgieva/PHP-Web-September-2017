<?php
declare(strict_types = 1);

require 'IArea.php';
require 'Rectangle.php';

//$mRec with width = 15 mm and height = 35 mm
$input = explode(' ', trim(fgets(STDIN)));
$width = $input[4];
$height = $input[9];

$rectangle = new Rectangle(floatval($width), floatval($height));
echo ($rectangle);