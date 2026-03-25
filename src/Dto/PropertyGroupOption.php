<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PropertyGroupOption extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $groupId = null,
        public ?string $name = null,
        public ?int $position = null,
        public ?string $colorHexCode = null,
        public ?string $mediaId = null,
        public ?bool $combinable = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?Media $media = null,
        public ?PropertyGroup $group = null,
        public ?array $productConfiguratorSettings = null,
        public ?array $productProperties = null,
        public ?array $productOptions = null,
    ) {}
}
