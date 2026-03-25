<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class ProductListingCriteria extends SpatieData
{
    public function __construct(
        public ?object $filter = null,
        public ?object $sort = null,
        #[MapName('post-filter')]
        public ?string $postFilter = null,
    ) {}
}
