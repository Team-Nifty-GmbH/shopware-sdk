<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PaymentMethod extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $pluginId = null,
        public ?string $handlerIdentifier = null,
        public ?string $name = null,
        public ?string $distinguishableName = null,
        public ?string $description = null,
        public ?int $position = null,
        public ?bool $active = null,
        public ?bool $afterOrderEnabled = null,
        public ?object $customFields = null,
        public ?string $availabilityRuleId = null,
        public ?string $mediaId = null,
        public ?string $formattedHandlerIdentifier = null,
        public ?string $technicalName = null,
        public ?string $shortName = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?Media $media = null,
        public ?Rule $availabilityRule = null,
        public ?array $salesChannelDefaultAssignments = null,
        public ?Plugin $plugin = null,
        public ?array $customers = null,
        public ?array $orderTransactions = null,
        public ?array $salesChannels = null,
        public ?AppPaymentMethod $appPaymentMethod = null,
    ) {}
}
