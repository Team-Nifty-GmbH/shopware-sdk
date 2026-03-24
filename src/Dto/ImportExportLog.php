<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ImportExportLog extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $activity = null,
		public ?string $state = null,
		public ?int $records = null,
		public ?string $userId = null,
		public ?string $profileId = null,
		public ?string $fileId = null,
		public ?string $invalidRecordsLogId = null,
		public ?string $username = null,
		public ?string $profileName = null,
		public ?object $config = null,
		public ?object $result = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?User $user = null,
		public ?ImportExportProfile $profile = null,
		public ?ImportExportFile $file = null,
		public ?ImportExportLog $invalidRecordsLog = null,
		public ?ImportExportLog $failedImportLog = null,
	) {
	}
}
