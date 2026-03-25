<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class UserAccessKey extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $userId = null,
        public ?string $accessKey = null,
        public ?string $secretAccessKey = null,
        public ?string $lastUsageAt = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?User $user = null,
    ) {}
}
