<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionPlan extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?int $minimumExecutionCount = null,
        public ?string $activeStorefrontLabel = null,
        public ?string $availabilityRuleId = null,
        public ?string $label = null,
        public ?object $translated = null,
    ) {}
}
