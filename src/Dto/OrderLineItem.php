<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class OrderLineItem extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $versionId = null,
        public ?string $orderId = null,
        public ?string $orderVersionId = null,
        public ?string $productId = null,
        public ?string $productVersionId = null,
        public ?string $promotionId = null,
        public ?string $parentId = null,
        public ?string $parentVersionId = null,
        public ?string $coverId = null,
        public ?string $identifier = null,
        public ?string $referencedId = null,
        public ?int $quantity = null,
        public ?string $label = null,
        public ?object $payload = null,
        public ?bool $good = null,
        public ?bool $removable = null,
        public ?bool $stackable = null,
        public ?int $position = null,
        public ?object $price = null,
        public ?object $priceDefinition = null,
        public ?float $unitPrice = null,
        public ?float $totalPrice = null,
        public ?string $description = null,
        public ?string $type = null,
        public ?object $customFields = null,
        public ?array $states = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?Media $cover = null,
        public ?Order $order = null,
        public ?Product $product = null,
        public ?Promotion $promotion = null,
        public ?array $orderDeliveryPositions = null,
        public ?array $orderTransactionCaptureRefundPositions = null,
        public ?array $downloads = null,
        public ?OrderLineItem $parent = null,
        public ?array $children = null,
    ) {}
}
