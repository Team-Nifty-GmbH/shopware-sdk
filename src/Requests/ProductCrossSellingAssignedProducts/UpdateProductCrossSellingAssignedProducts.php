<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSellingAssignedProducts;

/**
 * updateProductCrossSellingAssignedProducts
 *
 * Available since: 6.2.0.0
 */
class UpdateProductCrossSellingAssignedProducts extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
        return ProductCrossSellingAssignedProducts::from($response->json('data'));
    }
}
