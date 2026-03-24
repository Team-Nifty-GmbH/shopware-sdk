<?php

namespace TeamNiftyGmbH\Shopware\Requests\ConsentManagement;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * revokeConsent
 *
 * Marks the specified consent as revoked for the authenticated admin user. Experimental API, not part
 * of our backwards compatibility promise, thus this API can introduce breaking changes at any time.
 */
class RevokeConsent extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consents/revoke";
	}


	public function __construct(
		protected array $data = [],
	)
	{
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
