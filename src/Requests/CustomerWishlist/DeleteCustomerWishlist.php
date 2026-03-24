<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerWishlist;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomerWishlist
 *
 * Available since: 6.3.4.0
 */
class DeleteCustomerWishlist extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customer-wishlist/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the customer_wishlist
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
