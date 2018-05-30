<?php

namespace app\Operating;

use app\FuelTypes;

/**
 * Class BoatStrategy
 * @package app\Operating
 */
class BoatStrategy extends WatherStrategy
{
    const FUEL = FuelTypes::DIESEL;
}