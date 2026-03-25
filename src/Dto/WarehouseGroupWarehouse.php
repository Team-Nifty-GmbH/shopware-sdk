<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class WarehouseGroupWarehouse extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $warehouseId = null,
        public ?string $warehouseGroupId = null,
        public ?string $priority = null,
    ) {}
}
