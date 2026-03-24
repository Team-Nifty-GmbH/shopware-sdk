<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppSystem;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getRequestedPrivileges
 *
 * Returns the list of requested privileges for all apps. Requires admin scope and `acl_role:read`
 * permission to read.
 */
class GetRequestedPrivileges extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-system/privileges/requested";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
