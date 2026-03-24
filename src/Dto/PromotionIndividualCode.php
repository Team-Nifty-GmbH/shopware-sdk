<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionIndividualCode extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $promotionId = null,
		public ?string $code = null,
		public ?object $payload = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?Promotion $promotion = null,
	) {
	}
}
