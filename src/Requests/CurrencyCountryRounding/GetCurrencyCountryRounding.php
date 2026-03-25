<?php

namespace TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CurrencyCountryRounding;

/**
 * getCurrencyCountryRounding
 *
 * Available since: 6.4.0.0
 */
class GetCurrencyCountryRounding extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/currency-country-rounding/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the currency_country_rounding
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CurrencyCountryRounding::from($response->json('data'));
    }
}
