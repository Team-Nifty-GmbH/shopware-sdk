<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.5.0
 */
class ProductSearchConfigField extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $searchConfigId = null,
        public ?string $customFieldId = null,
        public ?string $field = null,
        public ?bool $tokenize = null,
        public ?bool $searchable = null,
        public ?int $ranking = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?ProductSearchConfig $searchConfig = null,
        public ?CustomField $customField = null,
    ) {}
}
