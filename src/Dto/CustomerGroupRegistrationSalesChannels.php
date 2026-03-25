<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.1.0
 */
class CustomerGroupRegistrationSalesChannels extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $customerGroupId = null,
        public ?string $salesChannelId = null,
        public ?string $createdAt = null,
        public ?CustomerGroup $customerGroup = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
