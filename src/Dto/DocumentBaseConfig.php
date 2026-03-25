<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class DocumentBaseConfig extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $documentTypeId = null,
        public ?string $logoId = null,
        public ?string $name = null,
        public ?string $filenamePrefix = null,
        public ?string $filenameSuffix = null,
        public ?bool $global = null,
        public ?string $documentNumber = null,
        public ?object $config = null,
        public ?string $createdAt = null,
        public ?object $customFields = null,
        public ?string $updatedAt = null,
        public ?DocumentType $documentType = null,
        public ?Media $logo = null,
        public ?array $salesChannels = null,
    ) {}
}
