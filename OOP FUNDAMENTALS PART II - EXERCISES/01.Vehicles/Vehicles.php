<?php
declare(strict_types = 1);

abstract class Vehicles
{
    protected $fuelQuantity;
    protected $fuelConsumption;

    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
    }

    abstract function drive(float $distance);
    abstract function refuel(float $liters);

    public function getFuelQuantity():float
    {
        return $this->fuelQuantity;
    }

    protected function setFuelQuantity(float $fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    public function getFuelConsumption():float
    {
        return $this->fuelConsumption;
    }

    protected function setFuelConsumption(float $fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }
}