<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductManufacturer;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductManufacturer;

/**
 * getProductManufacturer
 *
 * Available since: 6.0.0.0
 */
class GetProductManufacturer extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-manufacturer/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_manufacturer
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductManufacturer::from($response->json('data'));
    }
}
