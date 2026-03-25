<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CustomerGroup extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $displayGross = null,
        public ?object $customFields = null,
        public ?bool $registrationActive = null,
        public ?string $registrationTitle = null,
        public ?string $registrationIntroduction = null,
        public ?bool $registrationOnlyCompanyRegistration = null,
        public ?string $registrationSeoMetaDescription = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $customers = null,
        public ?array $salesChannels = null,
        public ?array $registrationSalesChannels = null,
    ) {}
}
