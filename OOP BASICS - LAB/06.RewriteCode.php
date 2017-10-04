<?php
declare(strict_types = 1);
class Calculator{
    public $number1;
    public $number2;
    public $operation;

    public function __construct(float $number1, float $number2, string $operation)
    {
        $this->setNumber1($number1);
        $this->setNumber2($number2);
        $this->operation = $operation;
    }

    public function getNumber1(): float
    {
        return $this->number1;
    }

    public function setNumber1(float $number1)
    {
        if(!($number1 == 0)){
            $this->number1 = $number1;
        } else {
            throw new Exception("division by zero is not possible");
        }
    }

    public function getNumber2(): float
    {
        return $this->number2;
    }

    public function setNumber2(float $number2)
    {
        if(! ($number2 == 0)){
            $this->number2 = $number2;
        }else {
            throw new Exception("division by zero is not possible");
        }
    }

    function calculate(){
        switch ($this->operation) {
            case 'sum':
                return $this->number1 + $this->number2;
                break;
            case 'div':
                return $this->number1 / $this->number2;
                break;
        }
        return true;
    }
}

$sum = new Calculator(2 , 3, 'sum');
$div = new Calculator(1 , 2, 'div');
//$divEx = new Calculator(2 , 0, 'div');

echo $div->calculate(). "\r\n";
echo $sum->calculate() . "\r\n";
//echo($divEx->calculate($number1 = 2, $number2 = 0));
