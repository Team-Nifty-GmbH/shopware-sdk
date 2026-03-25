<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ProductWarehouseGroup extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $warehouseGroupId = null,
    ) {}
}
