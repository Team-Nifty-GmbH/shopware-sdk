<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomerWishlistProduct;

/**
 * getCustomerWishlistProduct
 *
 * Available since: 6.3.4.0
 */
class GetCustomerWishlistProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer-wishlist-product/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer_wishlist_product
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerWishlistProduct::from($response->json('data'));
    }
}
