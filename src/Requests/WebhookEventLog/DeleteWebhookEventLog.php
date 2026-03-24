<?php

namespace TeamNiftyGmbH\Shopware\Requests\WebhookEventLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * deleteWebhookEventLog
 *
 * Available since: 6.4.1.0
 */
class DeleteWebhookEventLog extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/webhook-event-log/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the webhook_event_log
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
