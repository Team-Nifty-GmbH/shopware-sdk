<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Error extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?Links $links = null,
        public ?string $status = null,
        public ?string $code = null,
        public ?string $title = null,
        public ?string $detail = null,
        public ?string $description = null,
        public ?object $source = null,
        public ?Meta $meta = null,
    ) {}
}
