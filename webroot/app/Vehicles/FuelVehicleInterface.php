<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 24.05.18
 * Time: 12:43
 */

namespace app\Vehicles;;

/**
 * capabilities specified for road Vehicles
 * Interface RoadVehicleInterface
 */
interface FuelVehicleInterface
{
    public function refuel($fuelType);
    public function emptyLoads($fuelType);
}