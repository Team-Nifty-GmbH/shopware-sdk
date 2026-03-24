<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RelationshipToOne extends SpatieData
{
	public function __construct(
		public ?string $type = null,
		public ?string $id = null,
		public ?Meta $meta = null,
	)
	{
	}
}
