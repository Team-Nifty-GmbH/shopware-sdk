<?php

namespace TeamNiftyGmbH\Shopware\Requests\TaxRule;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\TaxRule;

/**
 * getTaxRule
 *
 * Available since: 6.1.0.0
 */
class GetTaxRule extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax-rule/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the tax_rule
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return TaxRule::from($response->json('data'));
    }
}
