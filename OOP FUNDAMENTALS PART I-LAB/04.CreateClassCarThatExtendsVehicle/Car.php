<?php
declare(strict_types = 1);

class Car extends Vehicle
{
    private $brand;
    private $model;
    private $color;
    //public $year;
    //public $numDoors;

    public function __construct(string $color,  string $brand, string $model, string $year,string $numberDoors)
    {
        parent:: __construct($color,$numberDoors);
        $this->brand = $brand;
        $this->model = $model;
        $this->color;
        $this->setNumberDoors($numberDoors);
        $this->year = $year;
    }

    public function setNumberDoors($numDoors)
    {
        $this->numDoors = $numDoors;
    }

    public function changeNumberDoors($numDoors){
        parent::setNumberDoors($numDoors);
    }
}
