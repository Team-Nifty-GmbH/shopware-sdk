<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.5.0
 */
class UserConfig extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $userId = null,
        public ?string $key = null,
        public ?object $value = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?User $user = null,
    ) {}
}
