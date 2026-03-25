<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerWishlist;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\CustomerWishlist;

/**
 * updateCustomerWishlist
 *
 * Available since: 6.3.4.0
 */
class UpdateCustomerWishlist extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/customer-wishlist/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the customer_wishlist
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected array $data,
        protected ?string $response = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomerWishlist::from($response->json('data'));
    }
}
