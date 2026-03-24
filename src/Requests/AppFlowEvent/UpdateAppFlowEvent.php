<?php

namespace TeamNiftyGmbH\Shopware\Requests\AppFlowEvent;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\AppFlowEvent;

/**
 * updateAppFlowEvent
 *
 * Available since: 6.5.2.0
 */
class UpdateAppFlowEvent extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
		protected array $data,
		protected ?string $response = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['_response' => $this->response]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return AppFlowEvent::from($response->json('data'));
    }
}
