<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class SeoUrl extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $salesChannelId = null,
        public ?string $languageId = null,
        public ?string $foreignKey = null,
        public ?string $routeName = null,
        public ?string $pathInfo = null,
        public ?string $seoPathInfo = null,
        public ?bool $isCanonical = null,
        public ?bool $isModified = null,
        public ?bool $isDeleted = null,
        public ?string $error = null,
        public ?string $url = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Language $language = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
