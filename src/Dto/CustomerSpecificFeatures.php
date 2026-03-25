<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CustomerSpecificFeatures extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $customerId = null,
        public ?string $features = null,
    ) {}
}
