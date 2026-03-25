<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Failure extends SpatieData
{
    public function __construct(
        public ?Meta $meta = null,
        public ?Links $links = null,
        public ?array $errors = null,
    ) {}
}
