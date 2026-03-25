<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Success extends SpatieData
{
    public function __construct(
        public ?Meta $meta = null,
        public ?Links $links = null,
        public ?Data $data = null,
        public ?array $included = null,
    ) {}
}
