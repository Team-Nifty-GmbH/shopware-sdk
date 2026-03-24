<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CountryState extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $countryId = null,
		public ?string $shortCode = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?bool $active = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?Country $country = null,
		public ?array $customerAddresses = null,
		public ?array $orderAddresses = null,
	) {
	}
}
