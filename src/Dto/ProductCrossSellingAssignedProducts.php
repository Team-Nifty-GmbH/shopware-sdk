<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.2.0.0
 */
class ProductCrossSellingAssignedProducts extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $crossSellingId = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?int $position = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Product $product = null,
        public ?ProductCrossSelling $crossSelling = null,
    ) {}
}
