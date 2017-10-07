<?php
declare(strict_types = 1);
class Car_6 extends Vehicle_6
{
    private $brand;
    private $model;
    private $year;

    public function __construct($color,$numberDoors, $model, $brand, $year)
    {
        parent:: __construct($color, $numberDoors);
        $this->model = $model;
        $this->year = $year;
        $this->brand = $brand;
    }

    public function paint($paint_color)
    {
        $this->color = $paint_color;
    }
}