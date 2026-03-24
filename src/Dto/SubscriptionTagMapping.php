<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SubscriptionTagMapping extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $subscriptionId = null,
		public ?string $tagId = null,
	) {
	}
}
