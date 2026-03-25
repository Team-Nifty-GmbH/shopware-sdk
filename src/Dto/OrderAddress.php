<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderAddress extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $countryId = null,
        public ?string $countryStateId = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $salutationId = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $street = null,
        public ?string $zipcode = null,
        public ?string $city = null,
        public ?string $company = null,
        public ?string $department = null,
        public ?string $title = null,
        public ?string $phoneNumber = null,
        public ?string $additionalAddressLine1 = null,
        public ?string $additionalAddressLine2 = null,
        public ?string $hash = null,
        public ?object $customFields = null,
        public ?string $vatId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Country $country = null,
        public ?CountryState $countryState = null,
        public ?Order $order = null,
        public ?array $orderDeliveries = null,
        public ?Salutation $salutation = null,
    ) {}
}
