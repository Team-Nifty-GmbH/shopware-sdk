<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AdvancedSearchConfig extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $salesChannelId = null,
		public ?string $esEnabled = null,
		public ?string $andLogic = null,
		public ?string $minSearchLength = null,
		public ?object $hitCount = null,
		public ?object $fields = null,
	) {
	}
}
