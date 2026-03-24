<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class DocumentType extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $technicalName = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $customFields = null,
		public ?object $translated = null,
		public ?array $documents = null,
		public ?array $documentBaseConfigs = null,
		public ?array $documentBaseConfigSalesChannels = null,
	) {
	}
}
