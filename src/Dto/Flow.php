<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.6.0
 */
class Flow extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $eventName = null,
        public ?int $priority = null,
        public ?bool $invalid = null,
        public ?bool $active = null,
        public ?string $description = null,
        public ?object $customFields = null,
        public ?string $appFlowEventId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array $sequences = null,
        public ?AppFlowEvent $appFlowEvent = null,
    ) {}
}
