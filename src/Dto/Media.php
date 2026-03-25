<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Media extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $userId = null,
        public ?string $mediaFolderId = null,
        public ?string $mimeType = null,
        public ?string $fileExtension = null,
        public ?string $uploadedAt = null,
        public ?string $fileName = null,
        public ?int $fileSize = null,
        public ?object $metaData = null,
        public ?object $mediaType = null,
        public ?object $config = null,
        public ?string $alt = null,
        public ?string $title = null,
        public ?string $url = null,
        public ?string $path = null,
        public ?bool $hasFile = null,
        public ?bool $private = null,
        public ?object $customFields = null,
        public ?string $fileHash = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?object $translated = null,
        public ?object $extensions = null,
        public ?array $tags = null,
        public ?array $thumbnails = null,
        public ?User $user = null,
        public ?array $categories = null,
        public ?array $productManufacturers = null,
        public ?array $productMedia = null,
        public ?array $productDownloads = null,
        public ?array $orderLineItemDownloads = null,
        public ?array $avatarUsers = null,
        public ?MediaFolder $mediaFolder = null,
        public ?array $propertyGroupOptions = null,
        public ?array $mailTemplateMedia = null,
        public ?array $documentBaseConfigs = null,
        public ?array $shippingMethods = null,
        public ?array $paymentMethods = null,
        public ?array $productConfiguratorSettings = null,
        public ?array $orderLineItems = null,
        public ?array $cmsBlocks = null,
        public ?array $cmsSections = null,
        public ?array $cmsPages = null,
        public ?array $documents = null,
        public ?array $a11yDocuments = null,
        public ?array $appPaymentMethods = null,
        public ?array $appShippingMethods = null,
    ) {}
}
