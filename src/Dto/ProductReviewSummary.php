<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ProductReviewSummary extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $salesChannelId = null,
		public ?string $summary = null,
		public ?string $visible = null,
		public ?object $translated = null,
	) {
	}
}
