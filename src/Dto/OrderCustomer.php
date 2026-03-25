<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderCustomer extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $customerId = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $email = null,
        public ?string $salutationId = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $company = null,
        public ?string $title = null,
        public ?array $vatIds = null,
        public ?string $customerNumber = null,
        public ?object $customFields = null,
        public ?string $remoteAddress = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Order $order = null,
        public ?Customer $customer = null,
        public ?Salutation $salutation = null,
    ) {}
}
