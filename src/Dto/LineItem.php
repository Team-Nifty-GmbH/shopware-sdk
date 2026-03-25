<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class LineItem extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $referencedId = null,
        public ?string $label = null,
        public ?string $quantity = null,
        public ?string $type = null,
        public ?string $good = null,
        public ?string $description = null,
        public ?string $removable = null,
        public ?string $stackable = null,
        public ?string $modified = null,
    ) {}
}
