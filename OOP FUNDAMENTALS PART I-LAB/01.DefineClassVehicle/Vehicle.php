<?php
declare(strict_types = 1);
namespace DefineClassVehicle;
class Vehicle{
    private $color;
    private $numberDoors;

    public function  __construct(string $numberDoors,string $color){
        $this->color = $color;
        $this->numberDoors = '[$numDooors]' . ' => ' . $this->color. ')';
    }
}
$myVehicle = new Vehicle('2 doors', 'orange');
print_r($myVehicle);
