<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Plugin extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $baseClass = null,
		public ?string $name = null,
		public ?string $composerName = null,
		public ?object $autoload = null,
		public ?bool $active = null,
		public ?bool $managedByComposer = null,
		public ?string $path = null,
		public ?string $author = null,
		public ?string $copyright = null,
		public ?string $license = null,
		public ?string $version = null,
		public ?string $upgradeVersion = null,
		public ?string $installedAt = null,
		public ?string $upgradedAt = null,
		public ?string $icon = null,
		public ?string $label = null,
		public ?string $description = null,
		public ?string $manufacturerLink = null,
		public ?string $supportLink = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?array $paymentMethods = null,
		public ?string $changelog = null,
	) {
	}
}
