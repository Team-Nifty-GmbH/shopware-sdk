<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales channel analytics configuration
 */
class SalesChannelAnalytics extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $trackingId = null,
		public ?bool $active = null,
		public ?bool $trackOrders = null,
		public ?bool $anonymizeIp = null,
		public ?bool $trackOffcanvasCart = null,
		public ?string $createdAt = null,
		public string|null $updatedAt = null,
		public ?SalesChannel $salesChannel = null,
	) {
	}
}
