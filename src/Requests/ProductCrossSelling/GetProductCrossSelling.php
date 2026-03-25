<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSelling;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSelling;

/**
 * getProductCrossSelling
 *
 * Available since: 6.1.0.0
 */
class GetProductCrossSelling extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-cross-selling/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductCrossSelling::from($response->json('data'));
    }
}
