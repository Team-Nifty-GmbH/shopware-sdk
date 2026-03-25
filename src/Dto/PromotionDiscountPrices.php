<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionDiscountPrices extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $discountId = null,
        public ?string $currencyId = null,
        public ?float $price = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?PromotionDiscount $promotionDiscount = null,
        public ?Currency $currency = null,
    ) {}
}
