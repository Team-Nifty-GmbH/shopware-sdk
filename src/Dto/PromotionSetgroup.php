<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionSetgroup extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $promotionId = null,
        public ?string $packagerKey = null,
        public ?string $sorterKey = null,
        public ?float $value = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Promotion $promotion = null,
        public ?array $setGroupRules = null,
    ) {}
}
