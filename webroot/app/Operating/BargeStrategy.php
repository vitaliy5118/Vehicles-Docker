<?php

namespace app\Operating;

use app\FuelTypes;
use app\Vehicles\Vehicle;

/**
 * Class BoatStrategy
 * @package app\Operating
 */
class BargeStrategy extends WatherStrategy
{
    const FUEL = FuelTypes::DIESEL;

    /**
     * we use polymorphism to clarify the new swimming strategy for barge
     * @param Vehicle $vehicle
     */
    public function swim(Vehicle $vehicle)
    {
        echo $vehicle->getName() . 'is very slowly swimming <br>';
    }
}