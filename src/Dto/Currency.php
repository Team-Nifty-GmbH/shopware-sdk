<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Currency extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?float $factor = null,
		public ?string $symbol = null,
		public ?string $isoCode = null,
		public ?string $shortName = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?bool $isSystemDefault = null,
		public ?float $taxFreeFrom = null,
		public ?object $customFields = null,
		public ?object $itemRounding = null,
		public ?object $totalRounding = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $salesChannelDefaultAssignments = null,
		public ?array $orders = null,
		public ?array $salesChannels = null,
		public ?array $salesChannelDomains = null,
		public ?array $promotionDiscountPrices = null,
		public ?array $productExports = null,
		public ?array $countryRoundings = null,
	) {
	}
}
