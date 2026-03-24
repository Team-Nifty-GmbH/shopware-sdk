<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionSalesChannel extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $promotionId = null,
		public ?string $salesChannelId = null,
		public ?int $priority = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?Promotion $promotion = null,
		public ?SalesChannel $salesChannel = null,
	) {
	}
}
