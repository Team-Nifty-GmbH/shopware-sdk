<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.2.0
 */
class AppCmsBlock extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?object $block = null,
        public ?string $template = null,
        public ?string $styles = null,
        public ?string $label = null,
        public ?string $appId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?App $app = null,
    ) {}
}
