<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductCrossSelling
 *
 * Available since: 6.1.0.0
 */
class DeleteProductCrossSelling extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/product-cross-selling/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_cross_selling
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
