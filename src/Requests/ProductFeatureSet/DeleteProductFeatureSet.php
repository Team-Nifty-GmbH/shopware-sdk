<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductFeatureSet
 *
 * Available since: 6.3.0.0
 */
class DeleteProductFeatureSet extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/product-feature-set/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_feature_set
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
