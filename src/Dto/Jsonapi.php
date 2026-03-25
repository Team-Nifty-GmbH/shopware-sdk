<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * An object describing the server's implementation
 */
class Jsonapi extends SpatieData
{
    public function __construct(
        public ?string $version = null,
        public ?Meta $meta = null,
    ) {}
}
