<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionAddress extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $countryId = null,
		public ?string $subscriptionId = null,
		public ?string $countryStateId = null,
		public ?string $salutationId = null,
		public ?string $firstName = null,
		public ?string $lastName = null,
		public ?string $street = null,
		public ?string $zipcode = null,
		public ?string $city = null,
		public ?string $company = null,
		public ?string $department = null,
		public ?string $title = null,
		public ?string $vatId = null,
		public ?string $phoneNumber = null,
		public ?string $additionalAddressLine1 = null,
		public ?string $additionalAddressLine2 = null,
		public ?object $customFields = null,
		public ?string $email = null,
	) {
	}
}
