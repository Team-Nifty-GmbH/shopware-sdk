<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class FindProductVariantRouteResponse extends SpatieData
{
	public function __construct(
		public ?object $foundCombination = null,
	) {
	}
}
