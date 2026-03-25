<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * An array of objects each containing \"type\" and \"id\" members for to-many relationships.
 */
class RelationshipToMany extends SpatieData
{
    public function __construct() {}
}
