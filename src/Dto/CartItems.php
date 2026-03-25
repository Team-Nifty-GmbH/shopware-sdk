<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CartItems extends SpatieData
{
    public function __construct(
        public ?object $items = null,
    ) {}
}
