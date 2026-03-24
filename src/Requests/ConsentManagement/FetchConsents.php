<?php

namespace TeamNiftyGmbH\Shopware\Requests\ConsentManagement;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * fetchConsents
 *
 * Returns a list of all available consents with their current status for the authenticated admin user.
 * Each consent includes its name, identifier, and current state (requested, accepted, or revoked).
 * Experimental API, not part of our backwards compatibility promise, thus this API can introduce
 * breaking changes at any time.
 */
class FetchConsents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consents";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
