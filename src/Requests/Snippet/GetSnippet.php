<?php

namespace TeamNiftyGmbH\Shopware\Requests\Snippet;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Snippet;

/**
 * getSnippet
 *
 * Available since: 6.0.0.0
 */
class GetSnippet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/snippet/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the snippet
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Snippet::from($response->json('data'));
    }
}
