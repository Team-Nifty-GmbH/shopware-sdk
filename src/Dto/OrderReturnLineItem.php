<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReturnLineItem extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderReturnId = null,
        public ?string $orderReturnVersionId = null,
        public ?string $orderLineItemId = null,
        public ?string $orderLineItemVersionId = null,
        public ?string $reasonId = null,
        public ?string $quantity = null,
        public ?object $shippingCosts = null,
        public ?float $refundAmount = null,
        public ?int $restockQuantity = null,
        public ?string $internalComment = null,
        public ?object $customFields = null,
        public ?string $stateId = null,
    ) {}
}
