<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 24.05.18
 * Time: 12:41
 */

namespace app\Vehicles;;

/**
 * Interface AnimalVehicleInterface
 * @package app\Vehicles
 */
interface AnimalVehicleInterface
{
    public function move();
    public function stop();
    public function eat($foodType);
    public function makeVoice();
}