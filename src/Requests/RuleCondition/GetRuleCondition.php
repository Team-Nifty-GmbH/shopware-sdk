<?php

namespace TeamNiftyGmbH\Shopware\Requests\RuleCondition;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\RuleCondition;

/**
 * getRuleCondition
 *
 * Available since: 6.0.0.0
 */
class GetRuleCondition extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rule-condition/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the rule_condition
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return RuleCondition::from($response->json('data'));
    }
}
