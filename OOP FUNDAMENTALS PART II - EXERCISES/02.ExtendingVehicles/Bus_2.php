<?php
declare(strict_types = 1);
namespace ExtendingVehicle;
class Bus extends Vehicles
{
    function drive(float $distance)
    {
        $neededFuel = ($this->fuelConsumption + 1.4) * $distance;
        if ($neededFuel >= $this->fuelQuantity) {
            echo "Bus needs refueling" . "\r\n";
        }else {
            $this->fuelQuantity -= $neededFuel;
            echo "Bus travelled {$distance} km" . "\r\n";
        }
    }

    function driveEmpty(float $distance)
    {
        $neededFuel = $this->fuelConsumption * $distance;
        if ($neededFuel >= $this->fuelQuantity) {
            echo "Bus needs refueling"."\r\n";
        }else{
            $this->fuelQuantity -= $neededFuel;
            echo "Bus travelled {$distance} km"."\r\n";
        }
    }

    function refuel(float $liters)
    {
        if ($liters > 0 && $liters < $this->tankCapacity){
            $this->fuelQuantity += $liters;
        }
        elseif ($liters <= 0){
            echo 'Fuel must be a positive number'. "\r\n";
        }elseif ($liters > $this->tankCapacity){
            echo 'Cannot fit fuel in tank' . "\r\n";
        }
    }
}