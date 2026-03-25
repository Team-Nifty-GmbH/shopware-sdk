<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Promotion extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $active = null,
        public ?string $validFrom = null,
        public ?string $validUntil = null,
        public ?int $maxRedemptionsGlobal = null,
        public ?int $maxRedemptionsPerCustomer = null,
        public ?int $priority = null,
        public ?bool $exclusive = null,
        public ?string $code = null,
        public ?bool $useCodes = null,
        public ?bool $useIndividualCodes = null,
        public ?string $individualCodePattern = null,
        public ?bool $useSetGroups = null,
        public ?bool $customerRestriction = null,
        public ?bool $preventCombination = null,
        public ?int $orderCount = null,
        public ?object $ordersPerCustomerCount = null,
        public ?array $exclusionIds = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $setgroups = null,
        public ?array $salesChannels = null,
        public ?array $discounts = null,
        public ?array $individualCodes = null,
        public ?array $personaRules = null,
        public ?array $personaCustomers = null,
        public ?array $orderRules = null,
        public ?array $cartRules = null,
        public ?array $orderLineItems = null,
    ) {}
}
