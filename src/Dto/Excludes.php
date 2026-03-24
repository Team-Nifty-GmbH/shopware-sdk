<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Specify the fields that should be excluded from the response for the given entities. Object key
 * needs to be the entity name, and the list of fields needs to be the value. Note that the exclude
 * fields will only be stripped on the API-Level, consider using the `fields` parameter for performance
 * reasons.
 */
class Excludes extends SpatieData
{
	public function __construct()
	{
	}
}
