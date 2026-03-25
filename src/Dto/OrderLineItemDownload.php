<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.19.0
 */
class OrderLineItemDownload extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderLineItemId = null,
        public ?string $orderLineItemVersionId = null,
        public ?string $mediaId = null,
        public ?int $position = null,
        public ?bool $accessGranted = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?OrderLineItem $orderLineItem = null,
        public ?Media $media = null,
    ) {}
}
