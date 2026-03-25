<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ThemeMedia extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $themeId = null,
        public ?string $mediaId = null,
        public ?Theme $theme = null,
        public ?Media $media = null,
    ) {}
}
