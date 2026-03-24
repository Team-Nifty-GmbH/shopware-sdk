<?php

namespace TeamNiftyGmbH\Shopware\Requests\ShippingMethodPrice;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteShippingMethodPrice
 *
 * Available since: 6.0.0.0
 */
class DeleteShippingMethodPrice extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/shipping-method-price/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the shipping_method_price
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
