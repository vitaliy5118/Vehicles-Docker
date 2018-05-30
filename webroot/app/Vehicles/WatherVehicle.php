<?php

namespace app\Vehicles;

use app\Operating\WatherStrategy;

/**
 * wather vehicle
 * Class WatherVehicle
 */
class WatherVehicle extends Vehicle implements WatherVehicleInterface, FuelVehicleInterface
{
    /**
     * WatherVehicle constructor.
     * Wather vehicle can use only watherStrategy type
     * @param $name
     * @param WatherStrategy $strategy
     */
    public function __construct($name, WatherStrategy $strategy)
    {
        parent::__construct($name, $strategy);
    }

    public function swim()
    {
        $this->strategy->swim($this);
    }

    public function refuel($fuelType = null)
    {
        $this->strategy->refuel($this, $fuelType);
    }

    public function emptyLoads($fuelType = null)
    {
        $this->strategy->emptyLoads($this, $fuelType);
    }

}