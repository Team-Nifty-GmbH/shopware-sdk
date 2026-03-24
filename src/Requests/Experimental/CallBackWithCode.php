<?php

namespace TeamNiftyGmbH\Shopware\Requests\Experimental;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * callBackWithCode
 *
 * Experimental: Logs in the user into the Shopware shop and forwards to the admin
 */
class CallBackWithCode extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/oauth/sso/code";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
