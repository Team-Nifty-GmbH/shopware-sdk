<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Configuration of the measurement system
 */
class MeasurementUnits extends SpatieData
{
    public function __construct(
        public ?string $system = null,
        public ?object $units = null,
    ) {}
}
