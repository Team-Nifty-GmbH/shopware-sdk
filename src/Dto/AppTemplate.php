<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.1.0
 */
class AppTemplate extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $template = null,
		public ?string $path = null,
		public ?bool $active = null,
		public ?string $appId = null,
		public ?string $hash = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?App $app = null,
	) {
	}
}
