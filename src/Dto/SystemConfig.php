<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SystemConfig extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $configurationKey = null,
        public ?object $configurationValue = null,
        public ?string $salesChannelId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
