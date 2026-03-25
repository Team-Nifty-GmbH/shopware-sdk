<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionCustomer extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $subscriptionId = null,
        public ?string $customerId = null,
        public ?string $salutationId = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $company = null,
        public ?string $title = null,
        public ?string $customerNumber = null,
        public ?string $vatId = null,
        public ?object $customFields = null,
        public ?string $remoteAddress = null,
    ) {}
}
