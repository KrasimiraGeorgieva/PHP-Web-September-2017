<?php
declare(strict_types = 1);
class Vehicle_8
{
    protected $color;
    private $numberDoors;

    public function  __construct(string $color, int $numberDoors){
        $this->color = $color;
        $this->numberDoors = $numberDoors;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    protected function getNumberDoors(): int
    {
        return $this->numberDoors;
    }

    protected function setNumberDoors(int $numberDoors)
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