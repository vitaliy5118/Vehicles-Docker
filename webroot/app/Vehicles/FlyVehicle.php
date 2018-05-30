<?php

namespace app\Vehicles;

use app\Operating\FlyStrategy;

/**
 * air vehicle strategy
 * Class FlyVehicle
 */
class FlyVehicle extends Vehicle implements FlyVehicleInterface, FuelVehicleInterface
{
    /**
     * FlyVehicle constructor.
     * Fly vehicle can use only fly Strategy type
     * @param $name
     * @param FlyStrategy $strategy
     */
    public function __construct($name, FlyStrategy $strategy)
    {
        parent::__construct($name, $strategy);
    }

    public function takeOff()
    {
        $this->strategy->takeOff($this);
    }

    public function fly()
    {
        $this->strategy->fly($this);
    }

    public function landing()
    {
        $this->strategy->landing($this);
    }

    public function emptyLoads($fuelType = null)
    {
        $this->strategy->emptyLoads($this, $fuelType);
    }

    public function refuel($fuelType = null)
    {
        $this->strategy->refuel($this, $fuelType);
    }

}