<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AggregationTerms
 */
class AggregationTerms extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $type = null,
		public ?string $field = null,
		public int|float|null $limit = null,
		public ?array $sort = null,
	) {
	}
}
