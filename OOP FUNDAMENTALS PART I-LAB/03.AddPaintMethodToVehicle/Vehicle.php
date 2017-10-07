<?php
declare(strict_types = 1);
namespace AddPaintMethodToVehicle;
class Vehicle{
    private $color;
    private $numberDoors;

    public function  __construct(string $numberDoors,string $color){
        $this->setColor($color);
        $this->setNumDoors($numberDoors);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getNumDoors()
    {
        return $this->numDooors;
    }

    public function setNumDoors($numDooors)
    {
        $this->numDooors = $numDooors;
    }


    public function __get($name){
        if($this->{$name}) {
            return $this->{$name};
        }
        else{
            return "Property does not exist!";
        }
    }

    public function changeColor(string $myColor){
        $this->setNumDoors( $myColor . ')');

    }
}
$myVehicle = new Vehicle('2 doors', 'orange');
$myVehicle->changeColor('blue');
print_r($myVehicle);