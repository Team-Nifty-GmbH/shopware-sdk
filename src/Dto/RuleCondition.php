<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.0.0.0
 */
class RuleCondition extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $type = null,
		public ?string $ruleId = null,
		public ?string $scriptId = null,
		public ?string $parentId = null,
		public ?object $value = null,
		public ?int $position = null,
		public ?object $customFields = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?Rule $rule = null,
		public ?AppScriptCondition $appScriptCondition = null,
		public ?RuleCondition $parent = null,
		public ?array $children = null,
	) {
	}
}
