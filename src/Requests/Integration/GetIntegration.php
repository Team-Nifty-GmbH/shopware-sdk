<?php

namespace TeamNiftyGmbH\Shopware\Requests\Integration;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Integration;

/**
 * getIntegration
 *
 * Available since: 6.0.0.0
 */
class GetIntegration extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/integration/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the integration
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Integration::from($response->json('data'));
    }
}
