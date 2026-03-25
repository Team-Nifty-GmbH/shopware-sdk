<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.0.0
 */
class ProductCustomFieldSet extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $productId = null,
        public ?string $customFieldSetId = null,
        public ?string $productVersionId = null,
        public ?Product $product = null,
        public ?CustomFieldSet $customFieldSet = null,
    ) {}
}
