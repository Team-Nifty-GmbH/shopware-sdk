<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.5.2.0
 */
class AppFlowEvent extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $appId = null,
		public ?string $name = null,
		public ?array $aware = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?App $app = null,
		public ?array $flows = null,
	) {
	}
}
