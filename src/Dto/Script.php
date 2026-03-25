<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.7.0
 */
class Script extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $script = null,
        public ?string $hook = null,
        public ?string $name = null,
        public ?bool $active = null,
        public ?string $appId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?App $app = null,
    ) {}
}
