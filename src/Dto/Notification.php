<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.7.0
 */
class Notification extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $status = null,
        public ?string $message = null,
        public ?bool $adminOnly = null,
        public ?array $requiredPrivileges = null,
        public ?string $createdByIntegrationId = null,
        public ?string $createdByUserId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Integration $createdByIntegration = null,
        public ?User $createdByUser = null,
    ) {}
}
