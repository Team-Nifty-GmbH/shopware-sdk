<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BusinessEventsResponse extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $class = null,
		public ?object $data = null,
		public ?string $aware = null,
		public ?string $extensions = null,
	) {
	}
}
