<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachineState;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\StateMachineState;

/**
 * getStateMachineState
 *
 * Available since: 6.0.0.0
 */
class GetStateMachineState extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/state-machine-state/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the state_machine_state
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return StateMachineState::from($response->json('data'));
    }
}
