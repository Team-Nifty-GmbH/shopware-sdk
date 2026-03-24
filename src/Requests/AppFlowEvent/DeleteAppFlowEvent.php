<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppFlowEvent;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteAppFlowEvent
 *
 * Available since: 6.5.2.0
 */
class DeleteAppFlowEvent extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/app-flow-event/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the app_flow_event
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
