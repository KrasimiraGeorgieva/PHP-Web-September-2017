<?php
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],//$i
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],//$i
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],//$i
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],//$i
];

$youngDogs = function($i){
    if ($i['type'] == "dog" && $i['age'] < 11){
        return true;
    }
    return false;
};
print_r(array_filter($animals,$youngDogs));