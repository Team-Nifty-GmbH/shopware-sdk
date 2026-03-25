<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * flow-actions
 *
 * Get a list of action for flow builder.
 */
class FlowActions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/_info/flow-actions.json';
    }

    public function __construct() {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
