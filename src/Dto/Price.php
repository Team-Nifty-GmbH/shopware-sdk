<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Price object
 */
class Price extends SpatieData
{
    public function __construct(
        public ?string $currencyId = null,
        public int|float|null $gross = null,
        public int|float|null $net = null,
        public ?bool $linked = null,
        public ?object $listPrice = null,
        public ?object $regulationPrice = null,
    ) {}
}
