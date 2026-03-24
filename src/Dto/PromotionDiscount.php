<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionDiscount extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $promotionId = null,
		public ?string $scope = null,
		public ?string $type = null,
		public ?float $value = null,
		public ?bool $considerAdvancedRules = null,
		public ?float $maxValue = null,
		public ?string $sorterKey = null,
		public ?string $applierKey = null,
		public ?string $usageKey = null,
		public ?string $pickerKey = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?Promotion $promotion = null,
		public ?array $discountRules = null,
		public ?array $promotionDiscountPrices = null,
	) {
	}
}
