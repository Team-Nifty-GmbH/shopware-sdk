<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Locale extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $code = null,
        public ?string $name = null,
        public ?string $territory = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $languages = null,
        public ?array $users = null,
    ) {}
}
