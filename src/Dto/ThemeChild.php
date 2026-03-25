<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.8.0
 */
class ThemeChild extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $parentId = null,
        public ?string $childId = null,
        public ?Theme $parentTheme = null,
        public ?Theme $childTheme = null,
    ) {}
}
