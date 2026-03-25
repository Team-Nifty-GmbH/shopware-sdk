<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AggregationHistogram
 */
class AggregationHistogram extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $type = null,
        public ?string $field = null,
        public int|float|null $interval = null,
        public ?string $format = null,
        public ?string $timeZone = null,
    ) {}
}
