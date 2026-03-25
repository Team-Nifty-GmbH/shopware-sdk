<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SalesChannelPaymentMethod extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $salesChannelId = null,
        public ?string $paymentMethodId = null,
        public ?SalesChannel $salesChannel = null,
        public ?PaymentMethod $paymentMethod = null,
    ) {}
}
