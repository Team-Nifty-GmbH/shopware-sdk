<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class StateMachine extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $technicalName = null,
		public ?string $name = null,
		public ?object $customFields = null,
		public ?string $initialStateId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $states = null,
		public ?array $transitions = null,
		public ?array $historyEntries = null,
	) {
	}
}
