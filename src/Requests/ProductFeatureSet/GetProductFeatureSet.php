<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductFeatureSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductFeatureSet;

/**
 * getProductFeatureSet
 *
 * Available since: 6.3.0.0
 */
class GetProductFeatureSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-feature-set/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_feature_set
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductFeatureSet::from($response->json('data'));
    }
}
