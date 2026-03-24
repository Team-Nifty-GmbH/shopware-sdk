<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * A link **MUST** be represented as either: a string containing the link's URL or a link object.
 */
class Link extends SpatieData
{
	public function __construct()
	{
	}
}
