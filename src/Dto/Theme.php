<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Theme extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $technicalName = null,
		public ?string $name = null,
		public ?string $author = null,
		public ?string $description = null,
		public ?object $labels = null,
		public ?object $helpTexts = null,
		public ?object $customFields = null,
		public ?string $previewMediaId = null,
		public ?string $parentThemeId = null,
		public ?object $themeJson = null,
		public ?object $baseConfig = null,
		public ?object $configValues = null,
		public ?bool $active = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $salesChannels = null,
		public ?array $media = null,
		public ?Media $previewMedia = null,
		public ?array $dependentThemes = null,
	) {
	}
}
