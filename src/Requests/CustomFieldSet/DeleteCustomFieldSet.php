<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomFieldSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomFieldSet
 *
 * Available since: 6.0.0.0
 */
class DeleteCustomFieldSet extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/custom-field-set/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set
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
