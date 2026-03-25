<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductKeywordDictionary extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $languageId = null,
        public ?string $keyword = null,
        public ?string $reversed = null,
        public ?Language $language = null,
    ) {}
}
