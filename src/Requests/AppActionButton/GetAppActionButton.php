<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppActionButton;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppActionButton;

/**
 * getAppActionButton
 *
 * Available since: 6.3.1.0
 */
class GetAppActionButton extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/app-action-button/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_action_button
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppActionButton::from($response->json('data'));
    }
}
