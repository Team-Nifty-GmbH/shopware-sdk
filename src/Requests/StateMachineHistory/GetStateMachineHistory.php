<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachineHistory;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\StateMachineHistory;

/**
 * getStateMachineHistory
 *
 * Available since: 6.0.0.0
 */
class GetStateMachineHistory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/state-machine-history/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the state_machine_history
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return StateMachineHistory::from($response->json('data'));
    }
}
