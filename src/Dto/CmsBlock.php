<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class CmsBlock extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $cmsSectionVersionId = null,
		public ?int $position = null,
		public ?string $type = null,
		public ?bool $locked = null,
		public ?string $name = null,
		public ?string $sectionPosition = null,
		public ?string $marginTop = null,
		public ?string $marginBottom = null,
		public ?string $marginLeft = null,
		public ?string $marginRight = null,
		public ?string $backgroundColor = null,
		public ?string $backgroundMediaId = null,
		public ?string $backgroundMediaMode = null,
		public ?string $cssClass = null,
		public ?object $visibility = null,
		public ?string $sectionId = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?CmsSection $section = null,
		public ?Media $backgroundMedia = null,
		public ?array $slots = null,
	) {
	}
}
