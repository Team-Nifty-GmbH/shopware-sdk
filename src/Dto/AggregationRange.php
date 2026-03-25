<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AggregationRange
 *
 * For more information, see [Aggregations Reference > Range
 * Aggregation](https://developer.shopware.com/docs/resources/references/core-reference/dal-reference/aggregations-reference.html#range-aggregations)
 */
class AggregationRange extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $type = null,
        public ?string $field = null,
        public ?array $ranges = null,
    ) {}
}
