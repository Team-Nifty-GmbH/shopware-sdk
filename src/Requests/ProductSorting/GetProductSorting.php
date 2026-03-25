<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSorting;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductSorting;

/**
 * getProductSorting
 *
 * Available since: 6.3.2.0
 */
class GetProductSorting extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-sorting/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_sorting
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductSorting::from($response->json('data'));
    }
}
