<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomFieldSet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CustomFieldSet;

/**
 * getCustomFieldSet
 *
 * Available since: 6.0.0.0
 */
class GetCustomFieldSet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/custom-field-set/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the custom_field_set
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CustomFieldSet::from($response->json('data'));
    }
}
