<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaThumbnailSize extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?int $width = null,
		public ?int $height = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?array $mediaFolderConfigurations = null,
		public ?array $mediaThumbnails = null,
	) {
	}
}
