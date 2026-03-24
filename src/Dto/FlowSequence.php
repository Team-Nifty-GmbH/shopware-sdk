<?php

namespace TeamNiftyGmbH\Shopware\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Added since version: 6.4.6.0
 */
class FlowSequence extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $flowId = null,
		public ?string $ruleId = null,
		public ?string $actionName = null,
		public ?object $config = null,
		public ?int $position = null,
		public ?int $displayGroup = null,
		public ?bool $trueCase = null,
		public ?string $parentId = null,
		public ?object $customFields = null,
		public ?string $appFlowActionId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?Flow $flow = null,
		public ?Rule $rule = null,
		public ?FlowSequence $parent = null,
		public ?array $children = null,
		public ?AppFlowAction $appFlowAction = null,
		public ?string $appFlowEventId = null,
	) {
	}
}
