<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CrossSellingElementCollection extends SpatieData
{
	public function __construct(
		public ?string $total = null,
	) {
	}
}
