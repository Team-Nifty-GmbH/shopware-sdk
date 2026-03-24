<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AdvancedSearchConfigField extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $configId = null,
		public ?string $customFieldId = null,
		public ?string $entity = null,
		public ?string $field = null,
		public ?bool $tokenize = null,
		public ?bool $searchable = null,
		public ?int $ranking = null,
		public ?object $config = null,
	) {
	}
}
