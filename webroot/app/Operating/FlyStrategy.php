<?php

namespace app\Operating;

use app\Vehicles\Vehicle;

/**
 * air vehicle strategy
 * Class FlyVehicle
 */
abstract class FlyStrategy extends FuelStrategy implements OperatingInterface
{
    public function takeOff(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' took off <br>';
    }

    public function fly(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' flying  <br>';
    }

    public function landing(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' landing <br>';
    }
}