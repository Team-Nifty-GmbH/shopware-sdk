<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.3.1.0
 */
class App extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?string $path = null,
		public ?string $author = null,
		public ?string $copyright = null,
		public ?string $license = null,
		public ?bool $active = null,
		public ?bool $configurable = null,
		public ?string $privacy = null,
		public ?string $version = null,
		public ?string $icon = null,
		public ?array $modules = null,
		public ?object $mainModule = null,
		public ?array $cookies = null,
		public ?bool $allowDisable = null,
		public ?string $baseAppUrl = null,
		public ?array $allowedHosts = null,
		public ?int $templateLoadPriority = null,
		public ?string $checkoutGatewayUrl = null,
		public ?string $contextGatewayUrl = null,
		public ?string $inAppPurchasesGatewayUrl = null,
		public ?string $sourceType = null,
		public ?object $sourceConfig = null,
		public ?bool $selfManaged = null,
		public ?array $requestedPrivileges = null,
		public ?string $label = null,
		public ?string $description = null,
		public ?string $privacyPolicyExtensions = null,
		public ?object $customFields = null,
		public ?string $integrationId = null,
		public ?string $aclRoleId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?object $translated = null,
		public ?Integration $integration = null,
		public ?AclRole $aclRole = null,
		public ?array $customFieldSets = null,
		public ?array $actionButtons = null,
		public ?array $templates = null,
		public ?array $webhooks = null,
		public ?array $paymentMethods = null,
		public ?array $taxProviders = null,
		public ?array $cmsBlocks = null,
		public ?array $flowActions = null,
		public ?array $flowEvents = null,
		public ?array $appShippingMethods = null,
	) {
	}
}
