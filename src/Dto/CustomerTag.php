<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CustomerTag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $customerId = null,
		public ?string $tagId = null,
		public ?Customer $customer = null,
		public ?Tag $tag = null,
	) {
	}
}
