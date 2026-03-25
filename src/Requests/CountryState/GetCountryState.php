<?php

namespace TeamNiftyGmbH\Shopware\Requests\CountryState;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\CountryState;

/**
 * getCountryState
 *
 * Available since: 6.0.0.0
 */
class GetCountryState extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/country-state/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the country_state
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return CountryState::from($response->json('data'));
    }
}
