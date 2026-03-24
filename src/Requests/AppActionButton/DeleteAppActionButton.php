<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppActionButton;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppActionButton
 *
 * Available since: 6.3.1.0
 */
class DeleteAppActionButton extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-action-button/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_action_button
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
