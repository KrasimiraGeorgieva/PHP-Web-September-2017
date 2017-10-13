<?php
declare(strict_types = 1);
namespace ExtendingVehicle;
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
        if ($liters > 0 && $liters < $this->tankCapacity){
            $this->fuelQuantity += $liters;
        } elseif ($liters <= 0){
                echo 'Fuel must be a positive number' . "\n";
        }elseif ($liters > $this->tankCapacity){
                echo 'Cannot fit fuel in tank' . "\n";
        }
    }
}