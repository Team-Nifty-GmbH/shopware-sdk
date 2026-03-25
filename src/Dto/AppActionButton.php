<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.1.0
 */
class AppActionButton extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $entity = null,
        public ?string $view = null,
        public ?string $url = null,
        public ?string $action = null,
        public ?string $label = null,
        public ?string $appId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?App $app = null,
    ) {}
}
