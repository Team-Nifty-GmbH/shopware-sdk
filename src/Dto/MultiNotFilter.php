<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MultiNotFilter extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $operator = null,
        public ?Filters $queries = null,
    ) {}
}
