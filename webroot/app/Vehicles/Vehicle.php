<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 25.05.18
 * Time: 11:52
 */

namespace app\Vehicles;

use app\Operating\OperatingInterface;

/**
 * Class Vehicle
 * @package app\Vehicles
 */
abstract class Vehicle
{
    protected $name;
    protected $strategy;

    /**
     * Vehicle constructor.
     * @param $name
     * @param OperatingInterface $strategy
     */
    public function __construct($name, OperatingInterface $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}