<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductPrice extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $ruleId = null,
        public ?array $price = null,
        public ?int $quantityStart = null,
        public ?int $quantityEnd = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Product $product = null,
        public ?Rule $rule = null,
    ) {}
}
