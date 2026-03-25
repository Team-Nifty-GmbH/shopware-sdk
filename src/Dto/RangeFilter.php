<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RangeFilter extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $field = null,
        public ?object $parameters = null,
    ) {}
}
