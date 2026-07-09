<?php

namespace TeamNiftyGmbH\Shopware\Requests\MainCategory;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteMainCategory
 *
 * Available since: 6.1.0.0
 */
class DeleteMainCategory extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/main-category/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the main_category
     * @param  null|string  $responseFormat  Data format for response. Empty if none is provided.
     */
    public function __construct(
        protected string $id,
        protected ?string $responseFormat = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['_response' => $this->responseFormat]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
