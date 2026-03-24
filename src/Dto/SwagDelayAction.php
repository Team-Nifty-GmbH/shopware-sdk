<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SwagDelayAction extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $eventName = null,
		public ?string $flowId = null,
		public ?string $orderId = null,
		public ?string $orderVersionId = null,
		public ?string $customerId = null,
		public ?string $executionTime = null,
		public ?bool $expired = null,
		public ?string $delaySequenceId = null,
		public ?object $stored = null,
	) {
	}
}
