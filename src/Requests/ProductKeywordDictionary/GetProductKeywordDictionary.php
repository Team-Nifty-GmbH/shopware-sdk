<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductKeywordDictionary;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductKeywordDictionary;

/**
 * getProductKeywordDictionary
 *
 * Available since: 6.0.0.0
 */
class GetProductKeywordDictionary extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-keyword-dictionary/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_keyword_dictionary
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductKeywordDictionary::from($response->json('data'));
    }
}
