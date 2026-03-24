<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemOperations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * consumeMessages
 *
 * This route can be used to consume messages from the message queue. It is intended to be used if
 * no
 * cronjob is configured to consume messages regularly.
 */
class ConsumeMessages extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/message-queue/consume";
	}


	public function __construct(
		protected array $data = [],
	)
	{
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
