<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class PromotionSetgroupRule extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $setgroupId = null,
		public ?string $ruleId = null,
		public ?PromotionSetgroup $setgroup = null,
		public ?Rule $rule = null,
	) {
	}
}
