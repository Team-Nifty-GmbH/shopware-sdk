<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * "Resource objects" appear in a JSON API document to represent resources.
 */
class Resource extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $id = null,
        public ?Attributes $attributes = null,
        public ?Relationships $relationships = null,
        public ?Links $links = null,
        public ?Meta $meta = null,
    ) {}
}
