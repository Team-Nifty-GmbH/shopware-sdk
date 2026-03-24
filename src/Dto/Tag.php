<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Tag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?array $products = null,
		public ?array $media = null,
		public ?array $categories = null,
		public ?array $customers = null,
		public ?array $orders = null,
		public ?array $shippingMethods = null,
		public ?array $newsletterRecipients = null,
		public ?array $landingPages = null,
		public ?array $rules = null,
	) {
	}
}
