<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.7.1.0
 */
class MeasurementSystem extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $technicalName = null,
        public ?string $name = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $units = null,
    ) {}
}
