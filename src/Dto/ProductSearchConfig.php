<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.5.0
 */
class ProductSearchConfig extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $languageId = null,
        public ?bool $andLogic = null,
        public ?int $minSearchLength = null,
        public ?array $excludedTerms = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Language $language = null,
        public ?array $configFields = null,
    ) {}
}
