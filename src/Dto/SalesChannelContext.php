<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesChannelContext extends SpatieData
{
    public function __construct(
        public ?object $currentCustomerGroup = null,
        public ?object $currency = null,
        public ?object $salesChannel = null,
        public ?object $taxRules = null,
        public ?object $customer = null,
        public ?object $paymentMethod = null,
        public ?object $shippingMethod = null,
        public ?object $context = null,
    ) {}
}
