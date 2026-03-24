<?php

namespace TeamNiftyGmbH\Shopware\Requests\AuthorizationAuthentication;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * token
 *
 * Fetch a access token that can be used to perform authenticated requests. For more information take a
 * look at the [Authentication
 * documentation](https://shopware.stoplight.io/docs/admin-api/docs/concepts/authentication-authorisation.md).
 */
class Token extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/oauth/token";
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
