<?php

namespace TeamNiftyGmbH\Shopware\Requests\App;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\App;

/**
 * getApp
 *
 * Available since: 6.3.1.0
 */
class GetApp extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return App::from($response->json('data'));
    }
}
