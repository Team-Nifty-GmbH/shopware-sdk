<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Specify the fields that should be returned for the given entities. Object key needs to be the entity
 * name, and the list of fields needs to be the value. Fields will not be included, if they are also
 * specified in the excludes. Note that the include fields will only be stripped on the API-Level,
 * consider using the `fields` parameter for performance reasons.
 */
class Includes extends SpatieData
{
    public function __construct() {}
}
