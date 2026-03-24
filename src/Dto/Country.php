<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Country extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $iso = null,
		public ?int $position = null,
		public ?bool $active = null,
		public ?bool $shippingAvailable = null,
		public ?string $iso3 = null,
		public ?bool $displayStateInRegistration = null,
		public ?bool $forceStateInRegistration = null,
		public ?bool $checkVatIdPattern = null,
		public ?bool $vatIdRequired = null,
		public ?string $vatIdPattern = null,
		public ?object $customFields = null,
		public ?object $customerTax = null,
		public ?object $companyTax = null,
		public ?bool $postalCodeRequired = null,
		public ?bool $checkPostalCodePattern = null,
		public ?bool $checkAdvancedPostalCodePattern = null,
		public ?string $advancedPostalCodePattern = null,
		public ?object $addressFormat = null,
		public ?string $defaultPostalCodePattern = null,
		public ?bool $isEu = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $states = null,
		public ?array $customerAddresses = null,
		public ?array $orderAddresses = null,
		public ?array $salesChannelDefaultAssignments = null,
		public ?array $salesChannels = null,
		public ?array $taxRules = null,
		public ?array $currencyCountryRoundings = null,
	) {
	}
}
