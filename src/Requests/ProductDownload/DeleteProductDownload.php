<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductDownload;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductDownload
 *
 * Available since: 6.4.19.0
 */
class DeleteProductDownload extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/product-download/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_download
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
