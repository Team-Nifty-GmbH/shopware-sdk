<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.0.0
 */
class LandingPage extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?bool $active = null,
		public ?string $name = null,
		public ?object $customFields = null,
		public ?object $slotConfig = null,
		public ?string $metaTitle = null,
		public ?string $metaDescription = null,
		public ?string $keywords = null,
		public ?string $url = null,
		public ?string $cmsPageId = null,
		public ?string $cmsPageVersionId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $tags = null,
		public ?CmsPage $cmsPage = null,
		public ?array $salesChannels = null,
		public ?array $seoUrls = null,
	) {
	}
}
