<?php
$a = 7.1234;
$b = 7.4321;

$sumTwo = function ($a,$b){
    return $a + $b;
};

echo 'The sum is ' . $sumTwo($a,$b);