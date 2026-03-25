<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ShippingMethodTag extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $shippingMethodId = null,
        public ?string $tagId = null,
        public ?ShippingMethod $shippingMethod = null,
        public ?Tag $tag = null,
    ) {}
}
