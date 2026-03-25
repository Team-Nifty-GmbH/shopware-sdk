<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Integration extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $label = null,
        public ?string $accessKey = null,
        public ?string $secretAccessKey = null,
        public ?string $lastUsageAt = null,
        public ?bool $admin = null,
        public ?object $customFields = null,
        public ?string $deletedAt = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $extensions = null,
        public ?App $app = null,
        public ?array $stateMachineHistoryEntries = null,
        public ?array $aclRoles = null,
        public ?string $writeAccess = null,
        public ?string $integrationId = null,
        public ?string $aclRoleId = null,
    ) {}
}
