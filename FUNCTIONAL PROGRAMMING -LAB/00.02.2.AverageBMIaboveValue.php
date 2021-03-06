<?php
declare(strict_types = 1);
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$value = 25;
function bmiCalcAvg($carry, $i): float {
    $carry += ($i['weight'] / ($i['height'] * $i['height']));
    return ($carry);
};
$bmiAvg = (array_reduce($people,"bmiCalcAvg", $value))/count($people);
print_r("The average BMI is $bmiAvg");