<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.5.7.0
 */
class AppShippingMethod extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $appName = null,
        public ?string $identifier = null,
        public ?string $appId = null,
        public ?string $shippingMethodId = null,
        public ?string $originalMediaId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?App $app = null,
        public ?ShippingMethod $shippingMethod = null,
        public ?Media $originalMedia = null,
    ) {}
}
