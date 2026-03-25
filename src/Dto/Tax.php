<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Tax extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?float $taxRate = null,
        public ?string $name = null,
        public ?int $position = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array $products = null,
        public ?array $rules = null,
        public ?array $shippingMethods = null,
    ) {}
}
