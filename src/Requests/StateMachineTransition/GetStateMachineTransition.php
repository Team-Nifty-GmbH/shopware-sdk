<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachineTransition;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\StateMachineTransition;

/**
 * getStateMachineTransition
 *
 * Available since: 6.0.0.0
 */
class GetStateMachineTransition extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/state-machine-transition/{$this->id}";
    }

    /**
     * @param  string  $id  Identifier for the state_machine_transition
     */
    public function __construct(
        protected string $id,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return StateMachineTransition::from($response->json('data'));
    }
}
