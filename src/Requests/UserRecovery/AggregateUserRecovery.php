<?php

namespace TeamNiftyGmbH\Shopware\Requests\UserRecovery;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * aggregateUserRecovery
 *
 * Available since: 6.6.10.0
 */
class AggregateUserRecovery extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/aggregate/user-recovery";
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
