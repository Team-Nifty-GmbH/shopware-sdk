<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CustomField extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $type = null,
        public ?object $config = null,
        public ?bool $active = null,
        public ?string $customFieldSetId = null,
        public ?bool $allowCustomerWrite = null,
        public ?bool $allowCartExpose = null,
        public ?bool $storeApiAware = null,
        public ?bool $includeInSearch = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?CustomFieldSet $customFieldSet = null,
        public ?array $productSearchConfigFields = null,
    ) {}
}
