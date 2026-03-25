<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Source extends SpatieData
{
    public function __construct(
        public ?string $pointer = null,
        public ?string $parameter = null,
    ) {}
}
