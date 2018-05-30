<?php

namespace app\Operating;

use app\FoodTypes;
use app\FuelTypes;
use app\Vehicles\Vehicle;

/**
 * horse operating strategy
 * Class HorseStrategy
 * @package app
 */
class DogTeamStrategy extends AnimalStrategy
{
    const FOOD = FoodTypes::MEET;

    public function move(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' run <br>';
    }

    public function makeVoice(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' make voice "Faf... faf... faf...<br>';
    }
}