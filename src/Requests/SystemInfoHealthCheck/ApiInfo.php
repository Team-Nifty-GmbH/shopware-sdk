<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * api-info
 *
 * Get information about the admin API in OpenAPI format.
 */
class ApiInfo extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/_info/openapi3.json';
    }

    /**
     * @param  null|string  $type  Type of the api
     */
    public function __construct(
        protected ?string $type = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['type' => $this->type]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
