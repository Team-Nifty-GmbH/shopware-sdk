<?php

namespace TeamNiftyGmbH\Shopware\Requests\Product;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Product;

/**
 * getProduct
 *
 * Available since: 6.0.0.0
 */
class GetProduct extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Product::from($response->json('data'));
    }
}
