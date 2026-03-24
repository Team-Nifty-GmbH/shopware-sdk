<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderProductWarehouse extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $orderId = null,
		public ?string $orderVersionId = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $warehouseId = null,
		public ?string $quantity = null,
	) {
	}
}
