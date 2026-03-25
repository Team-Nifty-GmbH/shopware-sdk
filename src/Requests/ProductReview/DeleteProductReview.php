<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductReview;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductReview
 *
 * Available since: 6.0.0.0
 */
class DeleteProductReview extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/product-review/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_review
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
