<?php

namespace TeamNiftyGmbH\Shopware\Requests\StateMachine;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;

/**
 * transitionEntityState
 *
 * Changes the entity state by applying the given transition.
 */
class TransitionEntityState extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/_action/state-machine/{$this->entityName}/{$this->entityId}/state/{$this->transition}";
	}


	/**
	 * @param string $entityName Name of the entity.
	 * @param string $entityId Identifier of the entity.
	 * @param string $transition The `action_name` of the `state_machine_transition`.
	 * @param null|string $stateFieldName This is the state column within the order delivery database table. There should be no need to change it from the default.
	 */
	public function __construct(
		protected string $entityName,
		protected string $entityId,
		protected string $transition,
		protected array $data = [],
		protected ?string $stateFieldName = null,
	) {
	}


	public function defaultBody(): array
	{
		return $this->data;
	}


	public function defaultQuery(): array
	{
		return array_filter(['stateFieldName' => $this->stateFieldName]);
	}


    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
