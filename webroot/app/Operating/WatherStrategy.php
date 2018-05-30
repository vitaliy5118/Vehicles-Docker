<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 24.05.18
 * Time: 12:50
 */

namespace app\Operating;

use app\Vehicles\Vehicle;

/**
 * Class WatherStrategy
 * @package app\Operating
 */
abstract class WatherStrategy extends FuelStrategy implements OperatingInterface
{
    public function swim(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' swimming <br>';
    }

    public function moor(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' mooring <br>';
    }

    public function stop(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' stoped <br>';
    }
}