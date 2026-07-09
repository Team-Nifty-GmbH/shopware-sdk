<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductMedia;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductMedia;

/**
 * createProductMedia
 *
 * Available since: 6.0.0.0
 */
class CreateProductMedia extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/product-media';
    }

    /**
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected array $data,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductMedia::from($response->json('data'));
    }
}
