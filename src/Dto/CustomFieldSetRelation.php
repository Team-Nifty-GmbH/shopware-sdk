<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CustomFieldSetRelation extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $customFieldSetId = null,
        public ?string $entityName = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?CustomFieldSet $customFieldSet = null,
    ) {}
}
