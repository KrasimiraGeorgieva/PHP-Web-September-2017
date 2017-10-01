<?php
declare(strict_types = 1);
/*
function contains (array $array, $searchedValue){
    foreach ($array as $value){
        if($value == $searchedValue){
            $exists = true;
            break;
        }
    }

    return false;
}
*/

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
];

$output = array_filter($animals, function($animals){
    if ($animals['type'] == "dog" && $animals['age'] > 10){
        return true;
    }
    return false;
});
print_r($output);