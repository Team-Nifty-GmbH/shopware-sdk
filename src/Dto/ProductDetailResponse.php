<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ProductDetailResponse extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $available = null,
		public ?bool $isCloseout = null,
		public ?string $displayGroup = null,
		public ?string $manufacturerNumber = null,
		public ?int $stock = null,
		public ?string $sortedProperties = null,
	) {
	}
}
