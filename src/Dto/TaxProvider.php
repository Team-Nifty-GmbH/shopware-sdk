<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.5.0.0
 */
class TaxProvider extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $identifier = null,
		public ?bool $active = null,
		public ?string $name = null,
		public ?int $priority = null,
		public ?string $processUrl = null,
		public ?string $availabilityRuleId = null,
		public ?string $appId = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?Rule $availabilityRule = null,
		public ?App $app = null,
	) {
	}
}
