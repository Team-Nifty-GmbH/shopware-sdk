<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PropertyGroup extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?string $displayType = null,
		public ?string $sortingType = null,
		public ?bool $filterable = null,
		public ?bool $visibleOnProductDetailPage = null,
		public ?int $position = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $options = null,
	) {
	}
}
