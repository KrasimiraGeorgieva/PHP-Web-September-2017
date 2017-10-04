<?php
namespace AddMethods;
class Car {
    public $brand;
    public $model;
    private $year;

    function __construct()
    {
        $this->brand = null;
        $this->model = null;
        $this->setYear($this->year);
    }

    function setYear($year)
    {
        if(is_numeric($year) && strlen($year) == 4){
            $this->year = $year;
        }
        return 'Year is not correct.';
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
       return $this->year;
    }
}

$myCar = new Car();
$myCar->brand= 'Aston Martin';
$myCar->model= 'Vanquish Zagato';
$myCar->setYear($year = 2018);

print_r($myCar);