<?php

namespace app;

use app\Vehicles\Vehicle;

/**
 * Class Garage
 * @package app
 */
class Garage
{
    /** @var array  $vehicles */
    private $vehicles = [];

    /**
     * @param $vehicles
     * @throws \Exception
     */
    public function setVehicles($vehicles)
    {
        foreach ($vehicles as $vehicle) {
            if (!$vehicle instanceof Vehicle) {
                throw new \Exception('sorry, garage can\'t take this vehicle type');
            }

            $this->setVehicle($vehicle);
        }
    }

    /**
     * @param Vehicle $vehicle
     */
    public function setVehicle(Vehicle $vehicle)
    {
        array_push($this->vehicles, $vehicle);
    }

    /**
     * @return array
     */
    public function getVehicles() : array
    {
        return $this->vehicles;
    }
}