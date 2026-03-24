<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getRoutes
 */
class GetRoutes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_info/routes";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
