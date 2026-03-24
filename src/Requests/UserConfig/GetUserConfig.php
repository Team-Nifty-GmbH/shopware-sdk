<?php

namespace TeamNiftyGmbH\Shopware\Requests\UserConfig;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\UserConfig;

/**
 * getUserConfig
 *
 * Available since: 6.3.5.0
 */
class GetUserConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user-config/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the user_config
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return UserConfig::from($response->json('data'));
    }
}
