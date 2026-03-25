<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ShippingMethod extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $technicalName = null,
        public ?bool $active = null,
        public ?int $position = null,
        public ?object $customFields = null,
        public ?string $availabilityRuleId = null,
        public ?string $mediaId = null,
        public ?string $deliveryTimeId = null,
        public ?string $taxType = null,
        public ?string $taxId = null,
        public ?string $description = null,
        public ?string $trackingUrl = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?DeliveryTime $deliveryTime = null,
        public ?Rule $availabilityRule = null,
        public ?array $prices = null,
        public ?Media $media = null,
        public ?array $tags = null,
        public ?array $orderDeliveries = null,
        public ?array $salesChannels = null,
        public ?array $salesChannelDefaultAssignments = null,
        public ?Tax $tax = null,
        public ?AppShippingMethod $appShippingMethod = null,
    ) {}
}
