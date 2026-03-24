<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductPrice;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductPrice;

/**
 * getProductPrice
 *
 * Available since: 6.0.0.0
 */
class GetProductPrice extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-price/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_price
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductPrice::from($response->json('data'));
    }
}
