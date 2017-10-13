<?php


class Cat extends Felime
{
    protected $breed;

    public function __construct(string $animalType,string $animalName,
                                float $animalWeight, string $livingRegion,string $breed)

    {
        parent::__construct($animalType, $animalName, $animalWeight, $livingRegion);

        $this->foodEaten;
        $this->setBreed($breed);
    }

    private function setBreed(string $breed)
    {
        $this->breed = $breed;
    }
    public function makeSound()
    {
       echo 'Meowwww'. "\r\n";
    }

    public function eatFood(Food $food, $foodType)
    {
        $this->makeSound();
        $this->foodEaten += $food->getQuantity();
    }

    public function __toString()
    {
       return $this->animalType . '[' . $this->animalName . ','.$this->breed .','
           .$this->animalWeight. ','. $this->livingRegion.','. $this->foodEaten .']';
    }


}