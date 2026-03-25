<?php

namespace TeamNiftyGmbH\Shopware\Requests\Flow;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Flow;

/**
 * getFlow
 *
 * Available since: 6.4.6.0
 */
class GetFlow extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/flow/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the flow
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Flow::from($response->json('data'));
    }
}
