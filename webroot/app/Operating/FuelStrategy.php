<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 29.05.18
 * Time: 17:12
 */

namespace app\Operating;

use app\Vehicles\Vehicle;


abstract class FuelStrategy
{
    public function emptyLoads(Vehicle $vehicle, $fuel)
    {
        if (null === $fuel) {
            $fuel = static::FUEL;
        }

        echo $vehicle->getName() . ' empty loads ' . $fuel .' <br>';
    }

    public function refuel(Vehicle $vehicle, $fuel)
    {
        if (null === $fuel) {
            $fuel = static::FUEL;
        }

        echo $vehicle->getName() . ' refuel ' . $fuel .' <br>';
    }

}