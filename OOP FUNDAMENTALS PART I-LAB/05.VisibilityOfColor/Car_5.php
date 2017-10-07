<?php
declare(strict_types = 1);
class Car_5 extends Vehicle_5
{
    private $brand;
    private $model;
    private $year;
    //public $color = 'Green';

    public function __construct($color,$numberDoors, $model, $brand, $year)
    {
        parent:: __construct($color, $numberDoors);
        $this->model = $model;
        $this->year = $year;
        $this->brand = $brand;
        $this->setColor($color);
    }

    public function paint($paint_color)
    {
        //$this->setColor($paint_color);  or
        parent::setColor($paint_color);
    }
}