<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.18.0
 */
class FlowTemplate extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?object $config = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
