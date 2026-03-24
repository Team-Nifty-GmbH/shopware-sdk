<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.12.0
 */
class OrderTransactionCaptureRefund extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $captureId = null,
		public ?string $captureVersionId = null,
		public ?string $stateId = null,
		public ?string $externalReference = null,
		public ?string $reason = null,
		public ?object $amount = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachineState $stateMachineState = null,
		public ?OrderTransactionCapture $transactionCapture = null,
		public ?array $positions = null,
		public ?object $shippingCosts = null,
	) {
	}
}
