<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MailHeaderFooter extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?bool $systemDefault = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $headerHtml = null,
        public ?string $headerPlain = null,
        public ?string $footerHtml = null,
        public ?string $footerPlain = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $salesChannels = null,
    ) {}
}
