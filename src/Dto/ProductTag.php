<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductTag extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $tagId = null,
        public ?Product $product = null,
        public ?Tag $tag = null,
        public ?string $parentVersionId = null,
    ) {}
}
