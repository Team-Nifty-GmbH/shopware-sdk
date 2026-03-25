<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * systemHealthCheck
 */
class SystemHealthCheck extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/_info/system-health-check';
    }

    /**
     * @param  null|bool  $verbose  Include detailed information in the response
     */
    public function __construct(
        protected ?bool $verbose = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['verbose' => $this->verbose]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
