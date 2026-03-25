<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CustomFieldSet extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?object $config = null,
        public ?bool $active = null,
        public ?bool $global = null,
        public ?int $position = null,
        public ?string $appId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array $customFields = null,
        public ?array $relations = null,
        public ?array $products = null,
        public ?App $app = null,
    ) {}
}
