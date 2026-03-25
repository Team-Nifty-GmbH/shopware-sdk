<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.10.3
 */
class AppScriptCondition extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $identifier = null,
        public ?string $name = null,
        public ?bool $active = null,
        public ?string $group = null,
        public ?string $script = null,
        public ?object $config = null,
        public ?string $appId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?App $app = null,
        public ?array $ruleConditions = null,
    ) {}
}
