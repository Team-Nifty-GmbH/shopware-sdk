<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CmsSection extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $cmsPageVersionId = null,
		public ?int $position = null,
		public ?string $type = null,
		public ?bool $locked = null,
		public ?string $name = null,
		public ?string $sizingMode = null,
		public ?string $mobileBehavior = null,
		public ?string $backgroundColor = null,
		public ?string $backgroundMediaId = null,
		public ?string $backgroundMediaMode = null,
		public ?string $cssClass = null,
		public ?string $pageId = null,
		public ?object $visibility = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?CmsPage $page = null,
		public ?Media $backgroundMedia = null,
		public ?array $blocks = null,
	) {
	}
}
