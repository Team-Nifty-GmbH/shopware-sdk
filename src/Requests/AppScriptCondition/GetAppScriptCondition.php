<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppScriptCondition;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppScriptCondition;

/**
 * getAppScriptCondition
 *
 * Available since: 6.4.10.3
 */
class GetAppScriptCondition extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-script-condition/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_script_condition
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppScriptCondition::from($response->json('data'));
    }
}
