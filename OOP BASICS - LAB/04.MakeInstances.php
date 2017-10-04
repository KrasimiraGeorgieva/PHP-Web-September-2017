<?php
namespace MakeInstances;
class Car{
    public $brand;
    public $model;
    private $year;

    function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
    function setYear($year)
    {
        if(is_numeric($year) && strlen($year) == 4){
            $this->year = $year;
        }
        return 'Year is not correct.';
    }
    function getBrand(){
        return $this->brand;
    }
    function getModel(){
        return $this->model;
    }
    function getYear(){
        return $this->year;
    }
}

for($i = 0;$i < 4;$i++){
    $input = explode(' ',trim(fgets(STDIN)));
    $car = new Car($input[0],$input[1]);
    $car->setYear($input[2]);
    $cars[] = $car;
}
function sortCars($a,$b){
    if($a->brand == $b->brand &&
        $a->model == $b->model &&
        $a->year == $b->year) {
        return 0;
    }
    return($a->brand < $b->brand)? -1 : 1;
}
usort($cars,'sortCars');
foreach ($cars as $key => $value){
    echo $value->getBrand().",".$value->getModel().",".$value->getYear()."\n";
}