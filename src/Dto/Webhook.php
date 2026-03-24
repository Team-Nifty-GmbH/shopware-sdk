<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.1.0
 */
class Webhook extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $eventName = null,
		public ?string $url = null,
		public ?bool $onlyLiveVersion = null,
		public ?int $errorCount = null,
		public ?bool $active = null,
		public ?string $appId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?App $app = null,
	) {
	}
}
