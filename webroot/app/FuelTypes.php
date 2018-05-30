<?php

namespace app;

/**
 * Class FuelTypes
 */
final class FuelTypes implements EnumerationInterface
{
    const GAS = 'gas';
    const DIESEL = 'diesel';
    const KEROSENE = 'kerosene';

    /**
     * @return array
     */
    public static function getItems(): array
    {
        return get_defined_constants();
    }
}