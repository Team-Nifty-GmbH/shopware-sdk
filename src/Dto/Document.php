<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Document extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $documentTypeId = null,
        public ?string $referencedDocumentId = null,
        public ?string $orderId = null,
        public ?string $documentMediaFileId = null,
        public ?string $documentA11yMediaFileId = null,
        public ?string $orderVersionId = null,
        public ?object $config = null,
        public ?bool $sent = null,
        public ?bool $static = null,
        public ?string $deepLinkCode = null,
        public ?string $documentNumber = null,
        public ?object $customFields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?DocumentType $documentType = null,
        public ?Order $order = null,
        public ?Document $referencedDocument = null,
        public ?array $dependentDocuments = null,
        public ?Media $documentMediaFile = null,
        public ?Media $documentA11yMediaFile = null,
        public ?string $fileType = null,
    ) {}
}
