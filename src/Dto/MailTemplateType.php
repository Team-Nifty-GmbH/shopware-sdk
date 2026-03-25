<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MailTemplateType extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $technicalName = null,
        public ?object $availableEntities = null,
        public ?object $customFields = null,
        public ?object $templateData = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?array $mailTemplates = null,
    ) {}
}
