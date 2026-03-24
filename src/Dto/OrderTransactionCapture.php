<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.12.0
 */
class OrderTransactionCapture extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $orderTransactionId = null,
		public ?string $orderTransactionVersionId = null,
		public ?string $stateId = null,
		public ?string $externalReference = null,
		public ?object $amount = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachineState $stateMachineState = null,
		public ?OrderTransaction $transaction = null,
		public ?array $refunds = null,
		public ?object $shippingCosts = null,
	) {
	}
}
