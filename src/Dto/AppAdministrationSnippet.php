<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.15.0
 */
class AppAdministrationSnippet extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $value = null,
        public ?string $appId = null,
        public ?string $localeId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
