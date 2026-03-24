<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class LogEntry extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $message = null,
		public ?int $level = null,
		public ?string $channel = null,
		public ?object $context = null,
		public ?object $extra = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
