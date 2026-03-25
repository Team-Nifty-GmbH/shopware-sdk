<?php

namespace TeamNiftyGmbH\Shopware\Requests\Plugin;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Plugin;

/**
 * getPlugin
 *
 * Available since: 6.0.0.0
 */
class GetPlugin extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/plugin/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the plugin
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return Plugin::from($response->json('data'));
    }
}
