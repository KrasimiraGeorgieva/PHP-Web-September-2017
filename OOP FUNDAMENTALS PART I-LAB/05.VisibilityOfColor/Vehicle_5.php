<?php
declare(strict_types = 1);

class Vehicle_5{
    private $color;
    private $numberDoors;

    public function  __construct(string $color, string $numberDoors){
        $this->color = $color;
        $this->numberDoors = $numberDoors;
    }

    public function setColor($color)
    {
        $this->color = $color;
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
