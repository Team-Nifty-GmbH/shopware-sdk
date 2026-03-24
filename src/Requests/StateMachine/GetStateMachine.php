<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachine;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\StateMachine;

/**
 * getStateMachine
 *
 * Available since: 6.0.0.0
 */
class GetStateMachine extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/state-machine/{$this->id}";
	}


	/**
	 * @param string $id Identifier for the state_machine
	 */
	public function __construct(
		protected string $id,
	) {
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return StateMachine::from($response->json('data'));
    }
}
