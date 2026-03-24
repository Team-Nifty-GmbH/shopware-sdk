<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppScriptCondition;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppScriptCondition
 *
 * Available since: 6.4.10.3
 */
class DeleteAppScriptCondition extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-script-condition/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_script_condition
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
