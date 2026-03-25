<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ProductReview extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $customerId = null,
        public ?string $salesChannelId = null,
        public ?string $languageId = null,
        public ?string $externalUser = null,
        public ?string $externalEmail = null,
        public ?string $title = null,
        public ?string $content = null,
        public ?float $points = null,
        public ?bool $status = null,
        public ?string $comment = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Product $product = null,
        public ?Customer $customer = null,
        public ?SalesChannel $salesChannel = null,
        public ?Language $language = null,
    ) {}
}
