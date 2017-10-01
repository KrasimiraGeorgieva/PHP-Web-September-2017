<?php
declare(strict_types = 1);
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
function bmiCalc($i) {
    return ($i['weight'] / ($i['height'] * $i['height']));
};
echo 'Array ( ' . "\r\n";
for($i = 0; $i < count($people); $i++){
    $bmi = bmiCalc($people[$i]);
    if ($i == count($people)-1){
        echo"[{$i}] => array('name' => {$people[$i]['name']}, 'bmi'=>({$bmi})" . "\r\n";
    } else {
        echo "[{$i}] => array('name' => {$people[$i]['name']}, 'bmi'=>({$bmi})," . "\r\n";
}};
echo')';