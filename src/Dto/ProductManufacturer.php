<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductManufacturer extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $mediaId = null,
		public ?string $link = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?Media $media = null,
		public ?array $products = null,
	) {
	}
}
