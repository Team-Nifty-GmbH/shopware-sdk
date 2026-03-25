<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomEntity;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCustomEntity
 *
 * Available since: 6.4.9.0
 */
class DeleteCustomEntity extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/custom-entity/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the custom_entity
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
