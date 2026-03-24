<?php

namespace TeamNiftyGmbH\Shopware\Requests\FlowTemplate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\FlowTemplate;

/**
 * updateFlowTemplate
 *
 * Available since: 6.4.18.0
 */
class UpdateFlowTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/flow-template/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the flow_template
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
        return FlowTemplate::from($response->json('data'));
    }
}
