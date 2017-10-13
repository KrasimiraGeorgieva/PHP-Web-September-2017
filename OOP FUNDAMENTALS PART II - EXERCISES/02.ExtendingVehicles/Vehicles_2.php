<?php
declare(strict_types = 1);
namespace ExtendingVehicle;
abstract class Vehicles
{
    protected $fuelQuantity;
    protected $fuelConsumption;
    protected $tankCapacity;

    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setTankCapacity($tankCapacity);
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

    protected function setTankCapacity(float $tankCapacity)
    {
        $this->tankCapacity = $tankCapacity;
    }

    protected function getTankCapacity():float
    {
        return $this->tankCapacity;
    }
}