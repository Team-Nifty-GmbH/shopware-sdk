<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionDiscountRule extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $discountId = null,
        public ?string $ruleId = null,
        public ?PromotionDiscount $discount = null,
        public ?Rule $rule = null,
    ) {}
}
