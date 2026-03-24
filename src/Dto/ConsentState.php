<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ConsentState extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $scopeName = null,
		public ?string $identifier = null,
		public ?string $status = null,
		public string|null $actor = null,
		public string|null $updatedAt = null,
		public string|null $acceptedUntil = null,
	) {
	}
}
