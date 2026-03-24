<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductSearchConfig
 *
 * Available since: 6.3.5.0
 */
class DeleteProductSearchConfig extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/product-search-config/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_search_config
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
