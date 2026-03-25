<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CmsSlot extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        #[MapName('VersionId')]
        public ?string $versionId = null,
        public ?string $cmsBlockVersionId = null,
        public ?object $fieldConfig = null,
        public ?string $type = null,
        public ?string $slot = null,
        public ?bool $locked = null,
        public ?object $config = null,
        public ?object $customFields = null,
        public ?object $data = null,
        public ?string $blockId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?CmsBlock $block = null,
    ) {}
}
