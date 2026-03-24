<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Rule extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?int $priority = null,
		public ?string $description = null,
		public ?bool $invalid = null,
		public ?array $areas = null,
		public ?object $customFields = null,
		public ?object $moduleTypes = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?array $conditions = null,
		public ?array $productPrices = null,
		public ?array $shippingMethodPrices = null,
		public ?array $shippingMethodPriceCalculations = null,
		public ?array $shippingMethods = null,
		public ?array $paymentMethods = null,
		public ?array $personaPromotions = null,
		public ?array $flowSequences = null,
		public ?array $taxProviders = null,
		public ?array $tags = null,
		public ?array $orderPromotions = null,
		public ?array $cartPromotions = null,
		public ?array $promotionDiscounts = null,
		public ?array $promotionSetGroups = null,
		public ?string $extensions = null,
	) {
	}
}
