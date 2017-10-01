<?php
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Riky', 'type' => 'dog', 'age'  => 9],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
    [ 'name' => 'Tom', 'type' => 'cat', 'age'  => 3],
    [ 'name' => 'Jaky', 'type' => 'dog', 'age'  => 2],
];

$youngDogs = function($animals, $age = 9){
    if ($animals['type'] == "dog" && $animals['age'] <= $age){
        return true;
    }
    return false;
};
print_r(array_filter($animals,$youngDogs));