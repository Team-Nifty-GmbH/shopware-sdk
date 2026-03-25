<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSellingAssignedProducts;

/**
 * getProductCrossSellingAssignedProducts
 *
 * Available since: 6.2.0.0
 */
class GetProductCrossSellingAssignedProducts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-cross-selling-assigned-products/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling_assigned_products
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductCrossSellingAssignedProducts::from($response->json('data'));
    }
}
