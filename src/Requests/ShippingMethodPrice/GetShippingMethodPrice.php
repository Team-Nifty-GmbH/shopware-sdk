<?php

namespace TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ShippingMethodPrice;

/**
 * getShippingMethodPrice
 *
 * Available since: 6.0.0.0
 */
class GetShippingMethodPrice extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping-method-price/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the shipping_method_price
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ShippingMethodPrice::from($response->json('data'));
    }
}
