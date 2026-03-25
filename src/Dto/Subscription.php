<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Subscription extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?object $convertedOrder = null,
        public ?string $subscriptionNumber = null,
        public ?string $nextSchedule = null,
        public ?string $salesChannelId = null,
        public ?string $subscriptionPlanId = null,
        public ?string $subscriptionPlanName = null,
        public ?string $subscriptionIntervalId = null,
        public ?string $subscriptionIntervalName = null,
        public ?string $dateInterval = null,
        public ?string $cronInterval = null,
        public ?int $initialExecutionCount = null,
        public ?int $remainingExecutionCount = null,
        public ?string $billingAddressId = null,
        public ?string $shippingAddressId = null,
        public ?string $shippingMethodId = null,
        public ?string $paymentMethodId = null,
        public ?string $currencyId = null,
        public ?string $languageId = null,
        public ?string $stateId = null,
        public ?object $customFields = null,
        public ?object $itemRounding = null,
        public ?object $totalRounding = null,
    ) {}
}
