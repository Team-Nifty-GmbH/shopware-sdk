<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.1.0
 */
class AppPaymentMethod extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $appName = null,
        public ?string $identifier = null,
        public ?string $payUrl = null,
        public ?string $finalizeUrl = null,
        public ?string $validateUrl = null,
        public ?string $captureUrl = null,
        public ?string $refundUrl = null,
        public ?string $recurringUrl = null,
        public ?string $appId = null,
        public ?string $originalMediaId = null,
        public ?string $paymentMethodId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?App $app = null,
        public ?Media $originalMedia = null,
        public ?PaymentMethod $paymentMethod = null,
    ) {}
}
