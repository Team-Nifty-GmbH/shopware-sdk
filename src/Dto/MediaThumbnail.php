<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaThumbnail extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $mediaId = null,
        public ?string $mediaThumbnailSizeId = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $url = null,
        public ?string $path = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Media $media = null,
        public ?MediaThumbnailSize $mediaThumbnailSize = null,
    ) {}
}
