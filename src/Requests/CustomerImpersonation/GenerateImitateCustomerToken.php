<?php

namespace TeamNiftyGmbH\Shopware\Requests\CustomerImpersonation;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * generateImitateCustomerToken
 *
 * Generates a customer impersonation token for the given customer and sales channel.
 *
 * The token can be
 * used to authenticate as the customer in the sales channel.
 */
class GenerateImitateCustomerToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_proxy/generate-imitate-customer-token";
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
