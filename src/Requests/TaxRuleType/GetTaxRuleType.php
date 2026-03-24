<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxRuleType;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\TaxRuleType;

/**
 * getTaxRuleType
 *
 * Available since: 6.1.0.0
 */
class GetTaxRuleType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax-rule-type/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the tax_rule_type
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return TaxRuleType::from($response->json('data'));
    }
}
