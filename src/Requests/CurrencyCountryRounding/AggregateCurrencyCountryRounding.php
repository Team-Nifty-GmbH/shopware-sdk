<?php

namespace TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * aggregateCurrencyCountryRounding
 *
 * Available since: 6.6.10.0
 */
class AggregateCurrencyCountryRounding extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/aggregate/currency-country-rounding";
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
