<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class MailTemplate extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $mailTemplateTypeId = null,
        public ?bool $systemDefault = null,
        public ?string $senderName = null,
        public ?string $description = null,
        public ?string $subject = null,
        public ?string $contentHtml = null,
        public ?string $contentPlain = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?MailTemplateType $mailTemplateType = null,
        public ?array $media = null,
    ) {}
}
