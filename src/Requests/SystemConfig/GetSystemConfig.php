<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\SystemConfig;

/**
 * getSystemConfig
 *
 * Available since: 6.0.0.0
 */
class GetSystemConfig extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/system-config/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the system_config
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return SystemConfig::from($response->json('data'));
    }
}
