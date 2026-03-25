<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SalesChannelDomain extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $url = null,
        public ?string $salesChannelId = null,
        public ?string $languageId = null,
        public ?string $currencyId = null,
        public ?string $snippetSetId = null,
        public ?MeasurementUnits $measurementUnits = null,
        public ?bool $hreflangUseOnlyLocale = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?SalesChannel $salesChannel = null,
        public ?Language $language = null,
        public ?Currency $currency = null,
        public ?SnippetSet $snippetSet = null,
        public ?SalesChannel $salesChannelDefaultHreflang = null,
        public ?array $productExports = null,
    ) {}
}
