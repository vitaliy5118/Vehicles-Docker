<?php

require_once 'autoloader.php';

use app\Vehicles\WatherVehicle;
use app\Vehicles\RoadVehicle;
use app\Vehicles\FlyVehicle;
use app\Vehicles\AnimalVehicle;

use app\Operating\BoatStrategy;
use app\Operating\BargeStrategy;
use app\Operating\CarStrategy;
use app\Operating\HorseStrategy;
use app\Operating\DogTeamStrategy;
use app\Operating\TrackStrategy;
use app\Operating\PlaneStrategy;
use app\Operating\HelicopterStrategy;

use app\Garage;

$garage = new Garage();
$garage->setVehicles([
    new WatherVehicle('Cruiser Aurora', new BoatStrategy()),
    new WatherVehicle('Hetman Sagaidachny', new BoatStrategy()),
    new WatherVehicle('barge', new BargeStrategy()),

    new RoadVehicle('Bmw', new CarStrategy()),
    new RoadVehicle('Mazda', new CarStrategy()),
    new RoadVehicle('Kamaz', new TrackStrategy()),
    new RoadVehicle('Man', new TrackStrategy()),

    new FlyVehicle('AN-225 "MRIYA"', new PlaneStrategy()),
    new FlyVehicle('Boeing737', new PlaneStrategy()),
    new FlyVehicle('MI-8', new HelicopterStrategy()),
    new FlyVehicle('Apache', new HelicopterStrategy()),

    new AnimalVehicle('Gelderland horse', new HorseStrategy()),
    new AnimalVehicle('Mustang horse', new HorseStrategy()),
    new AnimalVehicle('Swedish Warmblood', new HorseStrategy()),

    new AnimalVehicle('Eskimo dog team', new DogTeamStrategy()),
]);

/**
 * auto run all methods
 */
foreach ($garage->getVehicles() as $vehicle) {
    $class_methods = get_class_methods($vehicle);

    foreach ($class_methods as $method_name) {
        if ($method_name == '__construct' || $method_name == 'getName') {
            continue;
        }

        $vehicle->$method_name();
    }

    echo('-----------<br>');
}

