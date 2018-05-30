<?php

namespace app\Vehicles;

use app\Operating\RoadStrategy;

/**
 * road vehicle strategy
 * Class RoadVehicle
 */
class RoadVehicle extends Vehicle implements RoadVehicleInterface, LeisureVehicleInterface, FuelVehicleInterface
{
    /**
     * RoadVehicle constructor.
     * Road vehicle can use only roadStrategy type
     * @param $name
     * @param RoadStrategy $strategy
     */
    public function __construct($name, RoadStrategy $strategy)
    {
        parent::__construct($name, $strategy);
    }

    public function move()
    {
        $this->strategy->move($this);
    }

    public function musicOn()
    {
        $this->strategy->musicOn($this);
    }

    public function stop()
    {
        $this->strategy->stop($this);
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