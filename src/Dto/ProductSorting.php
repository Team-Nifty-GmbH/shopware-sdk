<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.2.0
 */
class ProductSorting extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?bool $locked = null,
		public ?string $key = null,
		public ?int $priority = null,
		public ?bool $active = null,
		public ?object $fields = null,
		public ?string $label = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
	) {
	}
}
