<?php

namespace TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteCurrencyCountryRounding
 *
 * Available since: 6.4.0.0
 */
class DeleteCurrencyCountryRounding extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/currency-country-rounding/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the currency_country_rounding
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function __construct(
		protected string $id,
		protected ?string $response = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return null;
    }
}
