<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class NumberRange extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $typeId = null,
		public ?bool $global = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?string $pattern = null,
		public ?int $start = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?NumberRangeType $type = null,
		public ?array $numberRangeSalesChannels = null,
		public ?NumberRangeState $state = null,
	) {
	}
}
