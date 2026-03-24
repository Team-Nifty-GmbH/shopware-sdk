<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MediaFolderConfigurationMediaThumbnailSize extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $mediaFolderConfigurationId = null,
		public ?string $mediaThumbnailSizeId = null,
		public ?MediaFolderConfiguration $mediaFolderConfiguration = null,
		public ?MediaThumbnailSize $mediaThumbnailSize = null,
	) {
	}
}
