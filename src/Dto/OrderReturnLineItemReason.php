<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReturnLineItemReason extends SpatieData
{
	public function __construct(
		public ?object $reason = null,
	) {
	}
}
