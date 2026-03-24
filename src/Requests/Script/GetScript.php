<?php

namespace TeamNiftyGmbH\Shopware\Requests\Script;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\Script;

/**
 * getScript
 *
 * Available since: 6.4.7.0
 */
class GetScript extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/script/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the script
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return Script::from($response->json('data'));
    }
}
