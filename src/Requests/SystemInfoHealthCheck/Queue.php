<?php

namespace TeamNiftyGmbH\Shopware\Requests\SystemInfoHealthCheck;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * queue
 *
 * Returns increment-based message queue statistics.
 *
 * **Deprecated:** This endpoint is deprecated and
 * will be removed in v6.8.0. Use `GET /_info/message-stats.json` instead for accurate message
 * processing statistics.
 */
class Queue extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/_info/queue.json";
	}


	public function __construct()
	{
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
