<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductCrossSellingAssignedProducts
 *
 * Available since: 6.2.0.0
 */
class DeleteProductCrossSellingAssignedProducts extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/product-cross-selling-assigned-products/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_cross_selling_assigned_products
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $response = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->response]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
