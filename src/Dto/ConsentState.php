<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConsentState extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $scopeName = null,
        public ?string $identifier = null,
        public ?string $status = null,
        public ?string $actor = null,
        public ?string $updatedAt = null,
        public ?string $acceptedUntil = null,
    ) {}
}
