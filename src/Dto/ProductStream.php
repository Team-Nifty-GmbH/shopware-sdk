<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductStream extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?object $apiFilter = null,
        public ?bool $invalid = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?object $customFields = null,
        public ?bool $internal = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $filters = null,
        public ?array $productCrossSellings = null,
        public ?array $productExports = null,
        public ?array $categories = null,
    ) {}
}
