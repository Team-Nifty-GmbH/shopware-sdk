<?php

namespace TeamNiftyGmbH\Shopware\Requests\ProductSearchConfigField;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use TeamNiftyGmbH\Shopware\Dto\ProductSearchConfigField;

/**
 * updateProductSearchConfigField
 *
 * Available since: 6.3.5.0
 */
class UpdateProductSearchConfigField extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
        return ProductSearchConfigField::from($response->json('data'));
    }
}
