<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductVisibility;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductVisibility;

/**
 * getProductVisibility
 *
 * Available since: 6.0.0.0
 */
class GetProductVisibility extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-visibility/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_visibility
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductVisibility::from($response->json('data'));
    }
}
