<?php

namespace app\Operating;

use app\FuelTypes;

/**
 * Class AerostatStrategy
 * @package app\Operating
 */
class AerostatStrategy extends FlyStrategy
{
    const FUEL = FuelTypes::KEROSENE;
}