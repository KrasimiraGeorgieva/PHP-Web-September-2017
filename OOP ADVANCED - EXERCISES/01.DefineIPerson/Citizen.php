<?php
declare(strict_types = 1);
namespace DefineIPerson;
require 'IPerson.php';
class Citizen implements Person{
    private $name;
    private $age;

    public function __construct(string $name,int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    function __toString()
    {
        return $this->name . ', ' . $this->age;
    }
}

$peter = new Citizen('Peter', 25);
echo $peter;