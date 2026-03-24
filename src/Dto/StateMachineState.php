<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class StateMachineState extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $technicalName = null,
		public ?string $name = null,
		public ?string $stateMachineId = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?StateMachine $stateMachine = null,
		public ?array $fromStateMachineTransitions = null,
		public ?array $toStateMachineTransitions = null,
		public ?array $orderTransactions = null,
		public ?array $orderDeliveries = null,
		public ?array $orders = null,
		public ?array $orderTransactionCaptures = null,
		public ?array $orderTransactionCaptureRefunds = null,
		public ?array $toStateMachineHistoryEntries = null,
		public ?array $fromStateMachineHistoryEntries = null,
	) {
	}
}
