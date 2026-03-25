<?php

namespace TeamNiftyGmbH\Shopware\Requests\Experimental;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * loadSsoLoginConfig
 *
 * Experimental: Loads the SSO login configuration to configure the forward to the Shopware SSO login
 * page.
 */
class LoadSsoLoginConfig extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/oauth/sso/config';
    }

    public function __construct() {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
