<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderTransaction extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $orderId = null,
		public ?string $orderVersionId = null,
		public ?string $paymentMethodId = null,
		public ?object $amount = null,
		public ?object $validationData = null,
		public ?string $stateId = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachineState $stateMachineState = null,
		public ?Order $order = null,
		public ?PaymentMethod $paymentMethod = null,
		public ?array $captures = null,
		public ?Order $primaryOrder = null,
		public ?object $shippingCosts = null,
	) {
	}
}
