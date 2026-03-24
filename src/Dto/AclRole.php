<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class AclRole extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?array $privileges = null,
		public ?string $deletedAt = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?array $users = null,
		public ?App $app = null,
		public ?array $integrations = null,
	) {
	}
}
