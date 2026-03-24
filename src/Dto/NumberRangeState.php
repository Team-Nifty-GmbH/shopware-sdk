<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class NumberRangeState extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $numberRangeId = null,
		public ?int $lastValue = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?NumberRange $numberRange = null,
	) {
	}
}
