<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerGroup;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomerGroup;

/**
 * getCustomerGroup
 *
 * Available since: 6.0.0.0
 */
class GetCustomerGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer-group/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer_group
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerGroup::from($response->json('data'));
    }
}
