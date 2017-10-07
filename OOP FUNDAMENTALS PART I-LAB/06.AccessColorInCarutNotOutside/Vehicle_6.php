<?php
declare(strict_types = 1);

class Vehicle_6
{
    protected $color;
    private $numberDoors;

    public function  __construct(string $color, string $numberDoors){
        $this->color = $color;
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
