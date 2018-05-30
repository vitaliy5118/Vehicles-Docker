<?php

namespace app\Operating;

use app\FoodTypes;
use app\Vehicles\Vehicle;

/**
 * horse operating strategy
 * Class HorseStrategy
 * @package app
 */
class HorseStrategy extends AnimalStrategy
{
    const FOOD = FoodTypes::OATS;

    public function move(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' gallops <br>';
    }

    public function makeVoice(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' make voice "Brrrr...<br>';
    }
}