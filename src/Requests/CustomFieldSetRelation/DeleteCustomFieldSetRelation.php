<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomFieldSetRelation;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomFieldSetRelation
 *
 * Available since: 6.0.0.0
 */
class DeleteCustomFieldSetRelation extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/custom-field-set-relation/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set_relation
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
