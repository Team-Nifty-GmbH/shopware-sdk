<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerWishlistProduct;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomerWishlistProduct
 *
 * Available since: 6.3.4.0
 */
class DeleteCustomerWishlistProduct extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customer-wishlist-product/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer_wishlist_product
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
