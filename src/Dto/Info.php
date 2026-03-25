<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Info extends SpatieData
{
    public function __construct(
        public ?Meta $meta = null,
        public ?Links $links = null,
        public ?Jsonapi $jsonapi = null,
    ) {}
}
