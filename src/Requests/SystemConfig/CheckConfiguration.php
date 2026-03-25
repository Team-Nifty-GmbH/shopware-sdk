<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * checkConfiguration
 *
 * Checks if a configuration domain exists.
 */
class CheckConfiguration extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/_action/system-config/check';
    }

    /**
     * @param  string  $domain  The configuration domain to check.
     */
    public function __construct(
        protected string $domain,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['domain' => $this->domain]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
