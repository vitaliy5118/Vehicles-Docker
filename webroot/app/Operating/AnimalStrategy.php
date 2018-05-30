<?php

namespace app\Operating;

use app\Vehicles\Vehicle;

/**
 * base animal operating strategy
 * Class AnimalStrategy
 * @package app
 */
abstract class AnimalStrategy implements OperatingInterface
{
    abstract public function move(Vehicle $vehicle);

    abstract public function makeVoice(Vehicle $vehicle);

    public function stop(Vehicle $vehicle)
    {
        echo $vehicle->getName() . ' stopped <br>';
    }

    public function eat(Vehicle $vehicle, $food)
    {
        if (null === $food) {
            $food = static::FOOD;
        }

        echo $vehicle->getName() . ' eat ' . $food .' <br>';
    }
}