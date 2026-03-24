<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SeoUrlTemplate extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $salesChannelId = null,
		public ?string $entityName = null,
		public ?string $routeName = null,
		public ?string $template = null,
		public ?bool $isValid = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?SalesChannel $salesChannel = null,
	) {
	}
}
