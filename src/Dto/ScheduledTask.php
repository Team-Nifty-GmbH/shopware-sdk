<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class ScheduledTask extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $scheduledTaskClass = null,
		public ?int $runInterval = null,
		public ?int $defaultRunInterval = null,
		public ?string $status = null,
		public ?string $lastExecutionTime = null,
		public ?string $nextExecutionTime = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
