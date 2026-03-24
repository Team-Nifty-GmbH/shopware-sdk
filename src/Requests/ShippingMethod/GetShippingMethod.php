<?php

namespace TeamNiftyGmbH\Shopware\Requests\ShippingMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ShippingMethod;

/**
 * getShippingMethod
 *
 * Available since: 6.0.0.0
 */
class GetShippingMethod extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping-method/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the shipping_method
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ShippingMethod::from($response->json('data'));
    }
}
