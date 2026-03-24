<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.7.1.0
 */
class MeasurementDisplayUnit extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $measurementSystemId = null,
		public ?bool $default = null,
		public ?string $type = null,
		public ?string $shortName = null,
		public ?float $factor = null,
		public ?int $precision = null,
		public ?string $name = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?MeasurementSystem $measurementSystem = null,
	) {
	}
}
