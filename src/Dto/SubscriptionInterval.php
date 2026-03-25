<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionInterval extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $active = null,
        public ?string $dateInterval = null,
        public ?string $cronInterval = null,
        public ?string $availabilityRuleId = null,
        public ?object $translated = null,
    ) {}
}
