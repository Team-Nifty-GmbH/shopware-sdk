<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.18.0
 */
class FlowTemplateJsonApi extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $type = null,
        public ?object $attributes = null,
        public ?object $relationships = null,
        public ?object $links = null,
        public ?object $meta = null,
    ) {}
}
