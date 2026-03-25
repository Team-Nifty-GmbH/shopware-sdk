<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.4.0
 */
class CustomerWishlist extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $customerId = null,
        public ?string $salesChannelId = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array $products = null,
        public ?Customer $customer = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
