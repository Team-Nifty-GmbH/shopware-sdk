<?php

namespace TeamNiftyGmbH\Shopware\Requests\Experimental;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * ssoAuth
 *
 * Experimental: Creates a redirection to the SSO login page
 */
class SsoAuth extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/oauth/sso/auth";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
