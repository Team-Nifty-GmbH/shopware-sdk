<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class Order extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $versionId = null,
		public ?int $autoIncrement = null,
		public ?string $orderNumber = null,
		public ?string $billingAddressId = null,
		public ?string $billingAddressVersionId = null,
		public ?string $primaryOrderDeliveryId = null,
		public ?string $primaryOrderDeliveryVersionId = null,
		public ?string $primaryOrderTransactionId = null,
		public ?string $primaryOrderTransactionVersionId = null,
		public ?string $currencyId = null,
		public ?string $languageId = null,
		public ?string $salesChannelId = null,
		public ?string $orderDateTime = null,
		public ?string $orderDate = null,
		public ?object $price = null,
		public ?float $amountTotal = null,
		public ?float $amountNet = null,
		public ?float $positionPrice = null,
		public ?string $taxStatus = null,
		public ?object $shippingCosts = null,
		public ?float $shippingTotal = null,
		public ?float $currencyFactor = null,
		public ?string $deepLinkCode = null,
		public ?string $affiliateCode = null,
		public ?string $campaignCode = null,
		public ?string $customerComment = null,
		public ?string $internalComment = null,
		public ?string $source = null,
		public ?string $taxCalculationType = null,
		public ?string $stateId = null,
		public ?array $ruleIds = null,
		public ?object $customFields = null,
		public ?string $createdById = null,
		public ?string $updatedById = null,
		public ?object $itemRounding = null,
		public ?object $totalRounding = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?StateMachineState $stateMachineState = null,
		public ?OrderDelivery $primaryOrderDelivery = null,
		public ?OrderTransaction $primaryOrderTransaction = null,
		public ?OrderCustomer $orderCustomer = null,
		public ?Currency $currency = null,
		public ?Language $language = null,
		public ?SalesChannel $salesChannel = null,
		public ?array $addresses = null,
		public ?OrderAddress $billingAddress = null,
		public ?array $deliveries = null,
		public ?array $lineItems = null,
		public ?array $transactions = null,
		public ?array $documents = null,
		public ?array $tags = null,
		public ?User $createdBy = null,
		public ?User $updatedBy = null,
	) {
	}
}
