<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class WishlistLoadRouteResponse extends SpatieData
{
	public function __construct(
		public ?object $wishlist = null,
	) {
	}
}
