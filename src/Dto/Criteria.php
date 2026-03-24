<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Criteria to query entities.
 */
class Criteria extends SpatieData
{
	public function __construct(
		public ?int $page = null,
		public ?int $limit = null,
		public ?array $filter = null,
		public ?array $sort = null,
		#[MapName('post-filter')]
		public ?array $postFilter = null,
		public ?Associations $associations = null,
		public ?array $aggregations = null,
		public ?array $grouping = null,
		public ?array $fields = null,
		#[MapName('total-count-mode')]
		public ?string $totalCountMode = null,
		public ?array $ids = null,
		public ?Includes $includes = null,
		public ?Excludes $excludes = null,
	) {
	}
}
