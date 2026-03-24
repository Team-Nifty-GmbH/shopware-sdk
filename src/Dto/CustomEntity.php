<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.9.0
 */
class CustomEntity extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?object $fields = null,
		public ?object $flags = null,
		public ?string $appId = null,
		public ?string $pluginId = null,
		public ?bool $cmsAware = null,
		public ?bool $storeApiAware = null,
		public ?bool $customFieldsAware = null,
		public ?string $labelProperty = null,
		public ?string $deletedAt = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
