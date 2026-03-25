<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.0.0
 */
class CurrencyCountryRounding extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $currencyId = null,
        public ?string $countryId = null,
        public ?object $itemRounding = null,
        public ?object $totalRounding = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Currency $currency = null,
        public ?Country $country = null,
    ) {}
}
