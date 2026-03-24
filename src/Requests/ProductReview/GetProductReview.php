<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductReview;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductReview;

/**
 * getProductReview
 *
 * Available since: 6.0.0.0
 */
class GetProductReview extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product-review/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the product_review
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductReview::from($response->json('data'));
    }
}
