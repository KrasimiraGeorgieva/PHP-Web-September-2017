<?php
declare(strict_types = 1);

class Vehicle{
    private $numberDoors;
    private $color;

    public function  __construct(string $color, string $numberDoors){
        $this->color = $color;
        $this->numberDoors = $numberDoors;
    }

    public function getNumberDoors():string
    {
        return $this->numberDoors;
    }

    public function setNumberDoors($numberDoors)
    {
        $this->numberDoors = $numberDoors;
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
