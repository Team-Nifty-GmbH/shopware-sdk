<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Snippet extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $setId = null,
		public ?string $translationKey = null,
		public ?string $value = null,
		public ?string $author = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?SnippetSet $set = null,
	) {
	}
}
