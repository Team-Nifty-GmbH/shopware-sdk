<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.1.0.0
 */
class ProductCrossSelling extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?string $sortBy = null,
		public ?string $sortDirection = null,
		public ?string $type = null,
		public ?bool $active = null,
		public ?int $limit = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $productStreamId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?Product $product = null,
		public ?ProductStream $productStream = null,
		public ?array $assignedProducts = null,
	) {
	}
}
