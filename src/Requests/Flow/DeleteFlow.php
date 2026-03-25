<?php

namespace TeamNiftyGmbH\Shopware\Requests\Flow;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteFlow
 *
 * Available since: 6.4.6.0
 */
class DeleteFlow extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/flow/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the flow
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
