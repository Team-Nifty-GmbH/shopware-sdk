<?php

namespace TeamNiftyGmbH\Shopware\Requests\ScheduledTask;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\ScheduledTask;

/**
 * getScheduledTask
 *
 * Available since: 6.0.0.0
 */
class GetScheduledTask extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/scheduled-task/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the scheduled_task
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return ScheduledTask::from($response->json('data'));
    }
}
