<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaFolderConfiguration extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?bool $createThumbnails = null,
		public ?bool $keepAspectRatio = null,
		public ?int $thumbnailQuality = null,
		public ?bool $private = null,
		public ?bool $noAssociation = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?array $mediaFolders = null,
		public ?array $mediaThumbnailSizes = null,
	) {
	}
}
