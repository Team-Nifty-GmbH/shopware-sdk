<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class FlowBulderActionsResponse extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?string $extensions = null,
	) {
	}
}
