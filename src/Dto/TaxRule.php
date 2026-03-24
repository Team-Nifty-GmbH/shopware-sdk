<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.1.0.0
 */
class TaxRule extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $taxRuleTypeId = null,
		public ?string $countryId = null,
		public ?float $taxRate = null,
		public ?object $data = null,
		public ?string $taxId = null,
		public ?string $activeFrom = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?TaxRuleType $type = null,
		public ?Country $country = null,
		public ?Tax $tax = null,
	) {
	}
}
