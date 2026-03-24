<?php

namespace TeamNiftyGmbH\Shopware\Requests\OrderAddress;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\OrderAddress;

/**
 * getOrderAddress
 *
 * Available since: 6.0.0.0
 */
class GetOrderAddress extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/order-address/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the order_address
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return OrderAddress::from($response->json('data'));
    }
}
