<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionPersonaCustomer extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $promotionId = null,
        public ?string $customerId = null,
        public ?Promotion $promotion = null,
        public ?Customer $customer = null,
    ) {}
}
