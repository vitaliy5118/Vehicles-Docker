<?php

namespace app\Operating;

use app\FuelTypes;

/**
 * air vehicle strategy
 * Class FlyVehicle
 */
class HelicopterStrategy extends FlyStrategy
{
    const FUEL = FuelTypes::KEROSENE;
}