<?php

namespace TeamNiftyGmbH\Shopware\Requests\Country;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Country;

/**
 * getCountry
 *
 * Available since: 6.0.0.0
 */
class GetCountry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/country/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the country
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Country::from($response->json('data'));
    }
}
