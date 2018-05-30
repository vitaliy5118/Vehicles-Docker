<?php

namespace tests;

use app\Operating\BoatStrategy;
use app\Operating\HelicopterStrategy;
use app\Operating\HorseStrategy;
use app\Operating\TrackStrategy;
use app\Vehicles\AnimalVehicle;
use app\Vehicles\FlyVehicle;
use app\Vehicles\RoadVehicle;
use app\Vehicles\WatherVehicle;
use PHPUnit\Framework\TestCase;
use app\FuelTypes;

class VehicleTest extends TestCase
{
    public function setUp()
    {
        $this->boat = new WatherVehicle('boat', new BoatStrategy());
        $this->track = new RoadVehicle('track', new TrackStrategy());
        $this->horse = new AnimalVehicle('horse', new HorseStrategy());
        $this->helicopter = new FlyVehicle('helicopter', new HelicopterStrategy());
    }

    /**
     * @dataProvider providerName
     */
    public function testName($name)
    {
        $this->assertEquals($name, $this->$name->getName());
    }

    public function providerName()
    {
        return [
            ['boat'],
            ['track'],
            ['horse'],
            ['helicopter']
        ];
    }

    public function testMoving()
    {
        $this->expectOutputString('boat swimming <br>helicopter took off <br>track start moving <br>');
        $this->boat->swim();
        $this->helicopter->takeOff();
        $this->track->move();
    }

    public function testFuel()
    {
        $this->expectOutputString('track refuel diesel <br>');
        $this->track->refuel(FuelTypes::DIESEL);
    }


}