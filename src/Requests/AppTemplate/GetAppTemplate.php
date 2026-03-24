<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppTemplate;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppTemplate;

/**
 * getAppTemplate
 *
 * Available since: 6.3.1.0
 */
class GetAppTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-template/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_template
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppTemplate::from($response->json('data'));
    }
}
