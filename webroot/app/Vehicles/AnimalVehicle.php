<?php

namespace app\Vehicles;

use app\Operating\AnimalStrategy;

/**
 * Class AnimalVehicle
 * @package app\Vehicles
 */
class AnimalVehicle extends Vehicle implements AnimalVehicleInterface, FoodVehicleInterface
{
    /**
     * AnimalVehicle constructor.
     * Animal vehicle can use only animalStrategy type
     * @param $name
     * @param AnimalStrategy $strategy
     */
    public function __construct($name, AnimalStrategy $strategy)
    {
        parent::__construct($name, $strategy);
    }

    public function move()
    {
        $this->strategy->move($this);
    }

    public function makeVoice()
    {
        $this->strategy->makeVoice($this);
    }

    /**
     * @param null|string $foodType
     */
    public function eat($foodType = null)
    {
        $this->strategy->eat($this, $foodType);
    }

    public function stop()
    {
        $this->strategy->stop($this);
    }

}