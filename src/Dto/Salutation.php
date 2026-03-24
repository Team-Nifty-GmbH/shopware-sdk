<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Salutation extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $salutationKey = null,
		public ?string $displayName = null,
		public ?string $letterName = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $customers = null,
		public ?array $customerAddresses = null,
		public ?array $orderCustomers = null,
		public ?array $orderAddresses = null,
		public ?array $newsletterRecipients = null,
	) {
	}
}
