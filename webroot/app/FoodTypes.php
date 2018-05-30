<?php
/**
 * Created by PhpStorm.
 * User: labak
 * Date: 24.05.18
 * Time: 12:48
 */

namespace app;

/**
 * Class FuelTypes
 */
final class FoodTypes implements EnumerationInterface
{
    const OATS = 'oats';
    const MEET = 'meet';

    /**
     * @return array
     */
    public static function getItems(): array
    {
        return get_defined_constants();
    }
}