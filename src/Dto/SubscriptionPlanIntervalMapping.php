<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionPlanIntervalMapping extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $subscriptionIntervalId = null,
		public ?string $subscriptionPlanId = null,
	) {
	}
}
