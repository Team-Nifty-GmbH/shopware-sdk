<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class StateMachineHistory extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $referencedId = null,
		public ?string $referencedVersionId = null,
		public ?string $stateMachineId = null,
		public ?string $entityName = null,
		public ?string $fromStateId = null,
		public ?string $toStateId = null,
		public ?string $transitionActionName = null,
		public ?string $userId = null,
		public ?string $integrationId = null,
		public ?string $internalComment = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachine $stateMachine = null,
		public ?StateMachineState $fromStateMachineState = null,
		public ?StateMachineState $toStateMachineState = null,
		public ?User $user = null,
		public ?Integration $integration = null,
		public ?string $entityId = null,
	) {
	}
}
