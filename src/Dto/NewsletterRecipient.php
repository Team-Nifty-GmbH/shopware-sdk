<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class NewsletterRecipient extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $email = null,
        public ?string $title = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $zipCode = null,
        public ?string $city = null,
        public ?string $street = null,
        public ?string $status = null,
        public ?string $hash = null,
        public ?object $customFields = null,
        public ?string $confirmedAt = null,
        public ?string $salutationId = null,
        public ?string $languageId = null,
        public ?string $salesChannelId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array $tags = null,
        public ?Salutation $salutation = null,
        public ?Language $language = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
