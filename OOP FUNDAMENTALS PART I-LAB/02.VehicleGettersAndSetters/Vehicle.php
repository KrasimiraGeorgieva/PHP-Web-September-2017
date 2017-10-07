<?php
declare(strict_types = 1);
namespace VehicleGettersAndSetters;
class Vehicle{
    private $color;
    private $numDoors;

    public function  __construct(string $color, int $numDoors){
        $this->setColor($color);
        $this->setNumDoors($numDoors);
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getNumDoors():int
    {
        return $this->numDoors;
    }

    public function setNumDoors($numDoors)
    {
        $this->numDoors = 'Get number of doors: '. $numDoors;
    }

    public function __get($name){
       if($this->{$name}) {
           return $this->{$name};
       }
       else{
           return "Property does not exist!";
       }
    }
}
$myVehicle = new Vehicle('Orange',5);
$myVehicle->setNumDoors(4);
echo $myVehicle->__get('numDoors'); //Get number of doors: 4

//echo $myVehicle->__get('color'); //Orange