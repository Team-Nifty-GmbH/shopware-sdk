<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductCrossSellingAssignedProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductCrossSellingAssignedProducts;

/**
 * createProductCrossSellingAssignedProducts
 *
 * Available since: 6.2.0.0
 */
class CreateProductCrossSellingAssignedProducts extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/product-cross-selling-assigned-products';
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function __construct(
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
