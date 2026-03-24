<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * List of filters to restrict the search result. For more information, see [Search Queries >
 * Filter](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#filter)
 */
class Filter extends SpatieData
{
	public function __construct(
		public ?string $type = null,
		public ?string $field = null,
		public ?string $value = null,
	) {
	}
}
