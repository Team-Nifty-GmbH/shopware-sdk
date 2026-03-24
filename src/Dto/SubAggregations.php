<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubAggregations extends SpatieData
{
	public function __construct(
		public ?string $aggregation = null,
	) {
	}
}
