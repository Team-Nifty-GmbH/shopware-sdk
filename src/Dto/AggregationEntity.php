<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AggregationEntity
 */
class AggregationEntity extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $type = null,
        public ?string $field = null,
        public ?string $definition = null,
    ) {}
}
