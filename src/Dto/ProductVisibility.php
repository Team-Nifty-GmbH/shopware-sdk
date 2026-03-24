<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductVisibility extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $salesChannelId = null,
		public ?int $visibility = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?SalesChannel $salesChannel = null,
		public ?Product $product = null,
	) {
	}
}
