<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class AclUserRole extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $userId = null,
		public ?string $aclRoleId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?User $user = null,
		public ?AclRole $aclRole = null,
	) {
	}
}
