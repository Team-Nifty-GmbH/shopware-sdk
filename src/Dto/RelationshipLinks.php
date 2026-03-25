<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * A resource object **MAY** contain references to other resource objects ("relationships").
 * Relationships may be to-one or to-many. Relationships can be specified by including a member in a
 * resource's links object.
 */
class RelationshipLinks extends SpatieData
{
    public function __construct(
        public ?array $self = null,
        public ?Link $related = null,
    ) {}
}
