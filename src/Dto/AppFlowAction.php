<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.10.0
 */
class AppFlowAction extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $appId = null,
        public ?string $name = null,
        public ?string $badge = null,
        public ?object $parameters = null,
        public ?object $config = null,
        public ?object $headers = null,
        public ?array $requirements = null,
        public ?string $iconRaw = null,
        public ?string $icon = null,
        public ?string $swIcon = null,
        public ?string $url = null,
        public ?bool $delayable = null,
        public ?string $label = null,
        public ?string $description = null,
        public ?string $headline = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?App $app = null,
        public ?array $flowSequences = null,
    ) {}
}
