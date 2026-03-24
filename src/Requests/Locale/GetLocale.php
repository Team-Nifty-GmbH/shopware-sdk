<?php

namespace TeamNiftyGmbH\Shopware\Requests\Locale;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Locale;

/**
 * getLocale
 *
 * Available since: 6.0.0.0
 */
class GetLocale extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/locale/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the locale
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Locale::from($response->json('data'));
    }
}
