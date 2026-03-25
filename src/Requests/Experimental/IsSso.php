<?php

namespace TeamNiftyGmbH\Shopware\Requests\Experimental;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * isSso
 *
 * Experimental: Returns a boolean which indicates the it is a SSO environment or not
 */
class IsSso extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/_info/is-sso';
    }

    public function __construct() {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
