<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaFolder extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?bool $useParentConfiguration = null,
        public ?string $configurationId = null,
        public ?string $defaultFolderId = null,
        public ?string $parentId = null,
        public ?int $childCount = null,
        public ?string $path = null,
        public ?string $name = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?MediaFolder $parent = null,
        public ?array $children = null,
        public ?array $media = null,
        public ?MediaDefaultFolder $defaultFolder = null,
        public ?MediaFolderConfiguration $configuration = null,
    ) {}
}
