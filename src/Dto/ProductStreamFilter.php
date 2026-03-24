<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductStreamFilter extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productStreamId = null,
		public ?string $parentId = null,
		public ?string $type = null,
		public ?string $field = null,
		public ?string $operator = null,
		public ?string $value = null,
		public ?object $parameters = null,
		public ?int $position = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?ProductStream $productStream = null,
		public ?ProductStreamFilter $parent = null,
		public ?array $queries = null,
	) {
	}
}
