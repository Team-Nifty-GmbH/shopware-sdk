<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductKeywordDictionary;

/**
 * updateProductKeywordDictionary
 *
 * Available since: 6.0.0.0
 */
class UpdateProductKeywordDictionary extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/product-keyword-dictionary/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_keyword_dictionary
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
        return ProductKeywordDictionary::from($response->json('data'));
    }
}
