<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderTag extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $tagId = null,
        public ?Order $order = null,
        public ?Tag $tag = null,
    ) {}
}
