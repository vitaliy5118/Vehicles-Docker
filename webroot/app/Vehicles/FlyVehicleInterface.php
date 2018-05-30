<?php

namespace app\Vehicles;

/**
 * capabilities specified for air Vehicle
 * Interface FlyVehicleInterface
 */
interface FlyVehicleInterface
{
    public function takeOff();
    public function fly();
    public function landing();
}