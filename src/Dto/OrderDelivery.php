<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderDelivery extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $shippingOrderAddressId = null,
        public ?string $shippingOrderAddressVersionId = null,
        public ?string $shippingMethodId = null,
        public ?string $stateId = null,
        public ?array $trackingCodes = null,
        public ?string $shippingDateEarliest = null,
        public ?string $shippingDateLatest = null,
        public ?object $shippingCosts = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?StateMachineState $stateMachineState = null,
        public ?Order $order = null,
        public ?OrderAddress $shippingOrderAddress = null,
        public ?ShippingMethod $shippingMethod = null,
        public ?array $positions = null,
        public ?Order $primaryOrder = null,
    ) {}
}
