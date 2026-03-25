<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.12.0
 */
class OrderTransactionCaptureRefundPosition extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $refundId = null,
        public ?string $refundVersionId = null,
        public ?string $orderLineItemId = null,
        public ?string $orderLineItemVersionId = null,
        public ?string $externalReference = null,
        public ?string $reason = null,
        public ?int $quantity = null,
        public ?object $amount = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?OrderLineItem $orderLineItem = null,
        public ?OrderTransactionCaptureRefund $orderTransactionCaptureRefund = null,
        public ?object $shippingCosts = null,
    ) {}
}
