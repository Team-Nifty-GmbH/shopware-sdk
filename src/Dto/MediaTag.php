<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaTag extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $mediaId = null,
        public ?string $tagId = null,
        public ?Media $media = null,
        public ?Tag $tag = null,
    ) {}
}
