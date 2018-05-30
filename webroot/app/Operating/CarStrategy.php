<?php

namespace app\Operating;

use app\FuelTypes;

/**
 * air vehicle strategy
 * Class FlyVehicle
 */
class CarStrategy extends RoadStrategy
{
    const FUEL = FuelTypes::GAS;
}