<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SalesChannelCurrency extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $salesChannelId = null,
		public ?string $currencyId = null,
		public ?SalesChannel $salesChannel = null,
		public ?Currency $currency = null,
	) {
	}
}
