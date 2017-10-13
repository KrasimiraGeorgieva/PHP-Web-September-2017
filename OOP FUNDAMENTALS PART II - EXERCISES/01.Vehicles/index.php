<?php
declare(strict_types = 1);
 require 'Vehicles.php';
 require 'Car.php';
 require 'Truck.php';

 $carInput = explode(' ', trim(fgets(STDIN)));
 $car = new Car(floatval($carInput[1]), floatval($carInput[2]));
 $truckInput = explode(' ', trim(fgets(STDIN)));
 $truck = new Truck(floatval($truckInput[1]), floatval($truckInput[2]));

 $number = intval(fgets(STDIN));
 for ($i = 0; $i <= $number; $i ++){
     $input = explode(' ', trim(fgets(STDIN)));
     if($input[0] == 'Drive' && $input[1] == 'Car'){
         $car->drive(floatval($input[2]));
     }elseif($input[0] == 'Drive' && $input[1] == 'Truck'){
         $truck->drive(floatval($input[2]));
     }
     if($input[0] == 'Refuel' && $input[1] == 'Car'){
         $car->refuel(floatval($input[2]));
     }elseif($input[0] == 'Refuel' && $input[1] == 'Truck'){
         $truck->refuel(floatval($input[2]));
     }
 }

 echo 'Car: ' . number_format($car->getFuelQuantity(),2,'.',''). "\r\n";
 echo 'Truck: ' . number_format($truck->getFuelQuantity(),2,'.',''). "\r\n";