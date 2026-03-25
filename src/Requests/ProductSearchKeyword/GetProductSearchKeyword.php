<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchKeyword;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ProductSearchKeyword;

/**
 * getProductSearchKeyword
 *
 * Available since: 6.0.0.0
 */
class GetProductSearchKeyword extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product-search-keyword/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_search_keyword
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return ProductSearchKeyword::from($response->json('data'));
    }
}
