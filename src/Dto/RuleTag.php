<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.5.0.0
 */
class RuleTag extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $ruleId = null,
		public ?string $tagId = null,
		public ?Rule $rule = null,
		public ?Tag $tag = null,
	) {
	}
}
