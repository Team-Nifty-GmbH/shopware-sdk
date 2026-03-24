<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getMinRunInterval
 *
 * Fetches the smallest interval that a scheduled task uses.
 */
class GetMinRunInterval extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_action/scheduled-task/min-run-interval";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
