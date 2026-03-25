<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class DeliveryTime extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?int $min = null,
        public ?int $max = null,
        public ?string $unit = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $shippingMethods = null,
        public ?array $products = null,
    ) {}
}
