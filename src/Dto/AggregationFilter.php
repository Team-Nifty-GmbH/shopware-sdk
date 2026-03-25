<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AggregationFilter
 */
class AggregationFilter extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $type = null,
        public ?array $filter = null,
    ) {}
}
