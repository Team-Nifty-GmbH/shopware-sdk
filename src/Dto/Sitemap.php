<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Sitemap extends SpatieData
{
	public function __construct(
		public ?string $filename = null,
	) {
	}
}
