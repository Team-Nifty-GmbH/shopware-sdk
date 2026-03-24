<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class StateMachineTransition extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $actionName = null,
		public ?string $stateMachineId = null,
		public ?string $fromStateId = null,
		public ?string $toStateId = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachine $stateMachine = null,
		public ?StateMachineState $fromStateMachineState = null,
		public ?StateMachineState $toStateMachineState = null,
	) {
	}
}
