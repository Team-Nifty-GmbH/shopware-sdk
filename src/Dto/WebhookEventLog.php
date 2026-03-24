<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.1.0
 */
class WebhookEventLog extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $appName = null,
		public ?string $webhookName = null,
		public ?string $eventName = null,
		public ?string $deliveryStatus = null,
		public ?int $timestamp = null,
		public ?int $processingTime = null,
		public ?string $appVersion = null,
		public ?object $requestContent = null,
		public ?object $responseContent = null,
		public ?int $responseStatusCode = null,
		public ?string $responseReasonPhrase = null,
		public ?string $url = null,
		public ?bool $onlyLiveVersion = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
