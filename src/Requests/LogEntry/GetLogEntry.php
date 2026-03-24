<?php

namespace TeamNiftyGmbH\Shopware\Requests\LogEntry;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\LogEntry;

/**
 * getLogEntry
 *
 * Available since: 6.0.0.0
 */
class GetLogEntry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/log-entry/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the log_entry
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return LogEntry::from($response->json('data'));
    }
}
