<?php


abstract class Mammal extends Animal
{
    protected $livingRegion;

    public function __construct(string $animalType,string $animalName, float $animalWeight,
                                string $livingRegion)
    {

        parent::__construct( $animalName, $animalType, $animalWeight);
        $this->setLivingRegion($livingRegion);

    }

    protected function setLivingRegion(string $livingRegion)
    {
        $this->livingRegion = $livingRegion;
    }
    protected function getLivingRegion():string
    {
        return $this->livingRegion;
    }

    public function __toString()
    {
        return $this->animalType . '[' . $this->animalName . ','. $this->animalWeight.','
             . $this->livingRegion.','. $this->foodEaten .']';
    }
}