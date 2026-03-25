<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class NavigationRouteResponse extends SpatieData
{
    public function __construct(
        public ?string $id = null,
    ) {}
}
