<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.1.0.0
 */
class TaxRuleType extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $technicalName = null,
		public ?int $position = null,
		public ?string $typeName = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $rules = null,
	) {
	}
}
