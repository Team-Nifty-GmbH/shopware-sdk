<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductDownload;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductDownload;

/**
 * updateProductDownload
 *
 * Available since: 6.4.19.0
 */
class UpdateProductDownload extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
        return ProductDownload::from($response->json('data'));
    }
}
