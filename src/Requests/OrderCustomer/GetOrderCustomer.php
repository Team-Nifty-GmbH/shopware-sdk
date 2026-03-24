<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderCustomer;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderCustomer;

/**
 * getOrderCustomer
 *
 * Available since: 6.0.0.0
 */
class GetOrderCustomer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/order-customer/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the order_customer
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderCustomer::from($response->json('data'));
    }
}
