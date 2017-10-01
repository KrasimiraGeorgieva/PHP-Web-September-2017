<?php
declare(strict_types = 1);
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
function bmiCalculate($i): float {
    return ($i['weight'] / ($i['height'] * $i['height']));
}
$output = array_map("bmiCalculate", $people);
print_r($output);


/*
declare(strict_types = 1);
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$output = array_map(function ($i): float {
    return ($i['weight'] / ($i['height'] * $i['height']));}, $people);
print_r($output);
*/