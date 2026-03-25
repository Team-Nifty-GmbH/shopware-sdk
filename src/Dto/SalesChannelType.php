<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SalesChannelType extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $coverUrl = null,
        public ?string $iconName = null,
        public ?array $screenshotUrls = null,
        public ?string $name = null,
        public ?string $manufacturer = null,
        public ?string $description = null,
        public ?string $descriptionLong = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $salesChannels = null,
    ) {}
}
