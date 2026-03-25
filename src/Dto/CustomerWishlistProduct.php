<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.4.0
 */
class CustomerWishlistProduct extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $wishlistId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?CustomerWishlist $wishlist = null,
        public ?Product $product = null,
    ) {}
}
