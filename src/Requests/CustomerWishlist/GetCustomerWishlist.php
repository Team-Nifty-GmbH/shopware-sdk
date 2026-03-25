<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerWishlist;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomerWishlist;

/**
 * getCustomerWishlist
 *
 * Available since: 6.3.4.0
 */
class GetCustomerWishlist extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customer-wishlist/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the customer_wishlist
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerWishlist::from($response->json('data'));
    }
}
