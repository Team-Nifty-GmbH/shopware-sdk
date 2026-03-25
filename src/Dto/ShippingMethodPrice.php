<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ShippingMethodPrice extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $shippingMethodId = null,
        public ?string $ruleId = null,
        public ?int $calculation = null,
        public ?string $calculationRuleId = null,
        public ?float $quantityStart = null,
        public ?float $quantityEnd = null,
        public ?array $currencyPrice = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?ShippingMethod $shippingMethod = null,
        public ?Rule $rule = null,
        public ?Rule $calculationRule = null,
    ) {}
}
