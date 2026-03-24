<?php

namespace TeamNiftyGmbH\Shopware\Requests\Customer;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Customer;

/**
 * getCustomer
 *
 * Available since: 6.0.0.0
 */
class GetCustomer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Customer::from($response->json('data'));
    }
}
