<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductSearchConfig;

/**
 * getProductSearchConfig
 *
 * Available since: 6.3.5.0
 */
class GetProductSearchConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-search-config/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_search_config
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductSearchConfig::from($response->json('data'));
    }
}
