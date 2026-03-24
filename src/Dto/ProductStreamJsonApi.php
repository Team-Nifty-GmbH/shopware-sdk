<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductStreamJsonApi extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $type = null,
		public ?object $attributes = null,
		public ?object $relationships = null,
		public ?object $links = null,
		public ?object $meta = null,
	)
	{
	}
}
