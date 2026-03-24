<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReturnLineItemReturn extends SpatieData
{
	public function __construct(
		public ?object $shippingCosts = null,
	) {
	}
}
