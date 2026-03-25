<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Cart extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?object $errors = null,
        public ?object $transactions = null,
        public ?string $modified = null,
    ) {}
}
