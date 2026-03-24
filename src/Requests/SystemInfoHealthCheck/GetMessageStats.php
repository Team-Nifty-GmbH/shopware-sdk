<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * getMessageStats
 *
 * Get statistics for recently processed messages in the message queue
 */
class GetMessageStats extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_info/message-stats.json";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
