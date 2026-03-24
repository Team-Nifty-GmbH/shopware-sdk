<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * info
 *
 * Get information about the cache configuration
 */
class Info extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_action/cache_info";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
