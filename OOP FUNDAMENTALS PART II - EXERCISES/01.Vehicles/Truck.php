<?php
declare(strict_types = 1);

class Truck extends Vehicles
{
    public function drive(float $distance)
    {
        $neededFuel = ($this->fuelConsumption + 1.6) * $distance;
        if ($neededFuel >= $this->fuelQuantity) {
            echo "Truck needs refueling" . "\r\n";
        }else {
            $this->fuelQuantity -= $neededFuel;
            echo "Truck travelled {$distance} km" . "\n";
        }
    }

    public function refuel(float $liters)
    {
        $this->fuelQuantity += ($liters*0.95);
    }

}