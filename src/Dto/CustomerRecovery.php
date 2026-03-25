<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.1.0.0
 */
class CustomerRecovery extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $hash = null,
        public ?string $customerId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Customer $customer = null,
    ) {}
}
