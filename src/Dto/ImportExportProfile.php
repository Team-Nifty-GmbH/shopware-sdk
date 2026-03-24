<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ImportExportProfile extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $technicalName = null,
		public ?string $label = null,
		public ?string $type = null,
		public ?bool $systemDefault = null,
		public ?string $sourceEntity = null,
		public ?string $fileType = null,
		public ?string $delimiter = null,
		public ?string $enclosure = null,
		public ?object $mapping = null,
		public ?object $updateBy = null,
		public ?object $config = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $importExportLogs = null,
		public ?string $name = null,
	) {
	}
}
