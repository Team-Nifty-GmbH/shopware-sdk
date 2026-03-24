<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Warehouse extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $description = null,
	) {
	}
}
