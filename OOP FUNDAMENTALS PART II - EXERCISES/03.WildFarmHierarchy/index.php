<?php
require 'Animal.php';
require 'Food.php';
require 'Mammal.php';
require 'Vegetable.php';
require 'Meat.php';
require 'Mouse.php';
require 'Felime.php';
require 'Zebra.php';
require 'Cat.php';
require 'Tiger.php';

$command = trim(fgets(STDIN));
$row = 1;

while ($command != "End"){
    $row++;

    if ($row % 2 == 0){
        $animalInfo = explode(' ', $command);

        $animalType = $animalInfo[0];
        $animalName = $animalInfo[1];
        $animalWeight = $animalInfo[2];
        $livingRegion = $animalInfo[3];

        if($animalType == "Cat"){
            $breed=$animalInfo[4];
            $animal = new Cat($animalType, $animalName, $animalWeight, $livingRegion, $breed);
        }elseif  ($animalType == "Mouse") {
            $animal = new Mouse($animalType, $animalName, $animalWeight, $livingRegion);
        }elseif ($animalType == "Zebra") {
            $animal = new Zebra($animalType, $animalName, $animalWeight, $livingRegion);
        }elseif ($animalType == "Tiger") {
            $animal = new Tiger($animalType, $animalName, $animalWeight, $livingRegion);
        }
    }else{
        $foodInfo = explode(' ', $command);
        $foodType = $foodInfo[0];
        $quantity = $foodInfo[1];

        if ($foodType == 'Vegetable'){
            $food = new Vegetable($quantity, $foodType);
        }elseif ($foodType == 'Meat'){
            $food = new Meat($quantity);
        }

        $animal->eatFood($food, $foodType);
        echo $animal . PHP_EOL;
    }
    $command = trim(fgets(STDIN));
}