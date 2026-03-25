<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteProductSearchConfigField
 *
 * Available since: 6.3.5.0
 */
class DeleteProductSearchConfigField extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/product-search-config-field/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the product_search_config_field
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
