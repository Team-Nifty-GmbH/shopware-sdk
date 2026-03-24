<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AggregationMetrics extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $type = null,
		public ?string $field = null,
	) {
	}
}
