<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderWarehouseGroup extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $warehouseGroupId = null,
    ) {}
}
