<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.3.0
 */
class IntegrationRole extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $integrationId = null,
		public ?string $aclRoleId = null,
		public ?Integration $integration = null,
		public ?AclRole $role = null,
	) {
	}
}
