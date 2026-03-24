<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

class InfoConfigResponse extends SpatieData
{
	public function __construct(
		public ?string $version = null,
		public ?string $shopId = null,
		public ?string $versionRevision = null,
		public ?object $adminWorker = null,
		public ?object $bundles = null,
		public ?object $settings = null,
		public ?array $inAppPurchases = null,
	) {
	}
}
