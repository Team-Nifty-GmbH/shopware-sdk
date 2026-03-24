<?php

namespace TeamNiftyGmbH\Shopware\Requests\WebhookEventLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\WebhookEventLog;

/**
 * getWebhookEventLog
 *
 * Available since: 6.4.1.0
 */
class GetWebhookEventLog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhook-event-log/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the webhook_event_log
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return WebhookEventLog::from($response->json('data'));
    }
}
