<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Sort extends SpatieData
{
    public function __construct(
        public ?string $field = null,
        public ?string $order = null,
        public ?bool $naturalSorting = null,
        public ?string $type = null,
    ) {}
}
