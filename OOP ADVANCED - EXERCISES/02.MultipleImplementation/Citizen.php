<?php
declare(strict_types = 1);
namespace MultipleImplementation;

require 'IPerson.php';
require 'IIdentifiable.php';
require 'IBirthable.php';

class Citizen implements Person, Identifiable, Birthable {
    private $name;
    private $age;
    private $birthDate;
    private $id;

    public function __construct(string $name,int $age,int $id,string $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthDate($birthDate);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setId(int $id)
    {
        return $this->id = $id;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setBirthDate(string $birthDate)
    {
        return $this->birthDate = $birthDate;
    }

    function __toString()
    {
        return $this->name . ', ' . $this->age . ', ID = '.$this->getId().', '.$this->getBirthDate();
    }
}

$peter = new Citizen('Peter', 35 ,770612678,'12.06.1977');
echo $peter;