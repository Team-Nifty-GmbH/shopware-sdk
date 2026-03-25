<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class NumberRangeSalesChannel extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $numberRangeId = null,
        public ?string $salesChannelId = null,
        public ?string $numberRangeTypeId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?NumberRange $numberRange = null,
        public ?SalesChannel $salesChannel = null,
        public ?NumberRangeType $numberRangeType = null,
    ) {}
}
