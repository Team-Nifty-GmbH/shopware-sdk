<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Pagination extends SpatieData
{
    public function __construct(
        public ?string $first = null,
        public ?string $last = null,
        public ?string $prev = null,
        public ?string $next = null,
    ) {}
}
