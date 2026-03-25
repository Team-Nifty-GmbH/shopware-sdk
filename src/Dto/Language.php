<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Language extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $parentId = null,
        public ?string $localeId = null,
        public ?string $translationCodeId = null,
        public ?string $name = null,
        public ?bool $active = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Language $parent = null,
        public ?Locale $locale = null,
        public ?Locale $translationCode = null,
        public ?array $children = null,
        public ?array $salesChannels = null,
        public ?array $salesChannelDefaultAssignments = null,
        public ?array $salesChannelDomains = null,
        public ?array $customers = null,
        public ?array $newsletterRecipients = null,
        public ?array $orders = null,
        public ?array $productSearchKeywords = null,
        public ?array $productKeywordDictionaries = null,
        public ?array $productReviews = null,
        public ?ProductSearchConfig $productSearchConfig = null,
    ) {}
}
