<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.1.0.0
 */
class ProductExport extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $productStreamId = null,
		public ?string $storefrontSalesChannelId = null,
		public ?string $salesChannelId = null,
		public ?string $salesChannelDomainId = null,
		public ?string $currencyId = null,
		public ?string $fileName = null,
		public ?string $accessKey = null,
		public ?string $encoding = null,
		public ?string $fileFormat = null,
		public ?bool $includeVariants = null,
		public ?bool $generateByCronjob = null,
		public ?string $generatedAt = null,
		public ?int $interval = null,
		public ?string $headerTemplate = null,
		public ?string $bodyTemplate = null,
		public ?string $footerTemplate = null,
		public ?bool $pausedSchedule = null,
		public ?bool $isRunning = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?ProductStream $productStream = null,
		public ?SalesChannel $storefrontSalesChannel = null,
		public ?SalesChannel $salesChannel = null,
		public ?SalesChannelDomain $salesChannelDomain = null,
		public ?Currency $currency = null,
	) {
	}
}
