<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductStreamFilter;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductStreamFilter;

/**
 * getProductStreamFilter
 *
 * Available since: 6.0.0.0
 */
class GetProductStreamFilter extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-stream-filter/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_stream_filter
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductStreamFilter::from($response->json('data'));
    }
}
