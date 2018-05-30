<?php

namespace app\Operating;

use app\Vehicles\Vehicle;

/**
 * Class RoadStrategy
 * @package app
 */
abstract class RoadStrategy extends FuelStrategy implements OperatingInterface
{
    public function musicOn(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' music switched on <br>';
    }

    public function stop(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' stopped <br>';
    }

    public function move(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' start moving <br>';
    }
}