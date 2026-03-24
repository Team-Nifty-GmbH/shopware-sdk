<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.0.0
 */
class ProductStreamMapping extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productId = null,
		public ?string $productVersionId = null,
		public ?string $productStreamId = null,
		public ?Product $product = null,
		public ?ProductStream $productStream = null,
	) {
	}
}
