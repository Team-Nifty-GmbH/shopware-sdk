<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class DocumentBaseConfigSalesChannel extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $documentBaseConfigId = null,
        public ?string $salesChannelId = null,
        public ?string $documentTypeId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?DocumentType $documentType = null,
        public ?DocumentBaseConfig $documentBaseConfig = null,
        public ?SalesChannel $salesChannel = null,
    ) {}
}
