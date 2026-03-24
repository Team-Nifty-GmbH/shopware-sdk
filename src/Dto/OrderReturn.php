<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReturn extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?string $orderId = null,
		public ?string $orderVersionId = null,
		public ?object $price = null,
		public ?object $shippingCosts = null,
		public ?string $stateId = null,
		public ?string $returnNumber = null,
		public ?string $requestedAt = null,
		public ?float $amountTotal = null,
		public ?float $amountNet = null,
		public ?string $internalComment = null,
		public ?string $createdById = null,
		public ?string $updatedById = null,
	) {
	}
}
