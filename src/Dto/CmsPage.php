<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CmsPage extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $name = null,
		public ?string $type = null,
		public ?string $entity = null,
		public ?string $cssClass = null,
		public ?object $config = null,
		public ?string $previewMediaId = null,
		public ?object $customFields = null,
		public ?bool $locked = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $sections = null,
		public ?Media $previewMedia = null,
		public ?array $categories = null,
		public ?array $landingPages = null,
		public ?array $homeSalesChannels = null,
		public ?array $products = null,
	) {
	}
}
