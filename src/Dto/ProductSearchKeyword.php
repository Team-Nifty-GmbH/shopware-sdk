<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductSearchKeyword extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $languageId = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $keyword = null,
        public ?float $ranking = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Product $product = null,
        public ?Language $language = null,
    ) {}
}
