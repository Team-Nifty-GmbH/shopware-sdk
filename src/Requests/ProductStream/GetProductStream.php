<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductStream;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductStream;

/**
 * getProductStream
 *
 * Available since: 6.0.0.0
 */
class GetProductStream extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-stream/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_stream
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductStream::from($response->json('data'));
    }
}
