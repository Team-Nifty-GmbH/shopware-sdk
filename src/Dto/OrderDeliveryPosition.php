<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderDeliveryPosition extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderDeliveryId = null,
        public ?string $orderDeliveryVersionId = null,
        public ?string $orderLineItemId = null,
        public ?string $orderLineItemVersionId = null,
        public ?object $price = null,
        public ?float $unitPrice = null,
        public ?float $totalPrice = null,
        public ?int $quantity = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?OrderDelivery $orderDelivery = null,
        public ?OrderLineItem $orderLineItem = null,
    ) {}
}
