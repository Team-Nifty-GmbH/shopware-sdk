<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ImportExportFile extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $originalName = null,
		public ?string $path = null,
		public ?string $expireDate = null,
		public ?int $size = null,
		public ?string $accessToken = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?ImportExportLog $log = null,
	) {
	}
}
