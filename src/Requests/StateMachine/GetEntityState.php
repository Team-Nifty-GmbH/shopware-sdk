<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachine;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Dto\StateMachine;

/**
 * getEntityState
 *
 * Retrieves the available state transitions for the specified entity.
 */
class GetEntityState extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/_action/state-machine/{$this->entityName}/{$this->entityId}/state";
    }

    /**
     * @param  string  $entityName  Name of the entity.
     * @param  string  $entityId  Identifier of the entity.
     * @param  null|string  $stateFieldName  This is the state column within the order delivery database table. There should be no need to change it from the default.
     */
    public function __construct(
        protected string $entityName,
        protected string $entityId,
        protected ?string $stateFieldName = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['stateFieldName' => $this->stateFieldName]);
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return StateMachine::from($response->json('data'));
    }
}
