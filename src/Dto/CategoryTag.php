<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CategoryTag extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $categoryId = null,
        public ?string $categoryVersionId = null,
        public ?string $tagId = null,
        public ?Category $category = null,
        public ?Tag $tag = null,
    ) {}
}
