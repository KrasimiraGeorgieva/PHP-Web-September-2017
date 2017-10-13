<?php

abstract class Animal{
    protected $animalName;
    protected $animalType;
    protected $animalWeight;
    protected $foodEaten = 0;

    public function __construct(string $animalName, string $animalType,float $animalWeight)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    protected function setAnimalName(string $animalName)
    {
        $this->animalName = $animalName;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    protected function setAnimalType(string $animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalWeight()
    {
        return $this->animalWeight;
    }

    protected function setAnimalWeight(float $animalWeight)
    {
        $this->animalWeight = $animalWeight;
    }

    public function getFoodEaten()
    {
        return $this->foodEaten;
    }

    public function setFoodEaten($foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }

    public function makeSound()
    {
        echo 'animal sound';
    }

    public function eatFood(Food $food, $foodType)
    {
    }
}
