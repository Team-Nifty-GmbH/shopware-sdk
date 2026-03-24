<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ProductWarehouse extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $warehouseId = null,
		public ?int $stock = null,
	) {
	}
}
