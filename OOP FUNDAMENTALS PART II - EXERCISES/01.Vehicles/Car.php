<?php
declare(strict_types = 1);

class Car extends Vehicles
{
    public function drive(float $distance)
    {
        $neededFuel = ($this->fuelConsumption + 0.9) * $distance;
        if ($neededFuel >= $this->fuelQuantity) {
            echo "Car needs refueling" . "\r\n";
        }else {
            $this->fuelQuantity -= $neededFuel;
            echo "Car travelled {$distance} km" . "\n";
        }
    }

    public function refuel(float $liters)
    {
        $this->fuelQuantity += $liters;
    }

}