<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppSystem;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getAcceptedPrivileges
 *
 * Returns the list of accepted privileges for the current integration. Requires admin scope with an
 * integration.
 */
class GetAcceptedPrivileges extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-system/{$this->appName}/privileges/accepted";
	}


	/**
	 * @param string $appName
	 */
	public function __construct(
		protected string $appName,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
