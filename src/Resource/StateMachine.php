<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\AggregateStateMachine;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\CreateStateMachine;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\DeleteStateMachine;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\GetEntityState;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\GetStateMachine;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\GetStateMachineList;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\SearchStateMachine;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\TransitionEntityState;
use TeamNiftyGmbH\Shopware\Requests\StateMachine\UpdateStateMachine;

class StateMachine extends BaseResource
{
	public function aggregateStateMachine(array $data = []): Response
	{
		return $this->connector->send(new AggregateStateMachine($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createStateMachine(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateStateMachine($data, $response));
	}


	/**
	 * @param string $id Identifier for the state_machine
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteStateMachine(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteStateMachine($id, $response));
	}


	/**
	 * @param string $entityName Name of the entity.
	 * @param string $entityId Identifier of the entity.
	 * @param null|string $stateFieldName This is the state column within the order delivery database table. There should be no need to change it from the default.
	 */
	public function getEntityState(string $entityName, string $entityId, ?string $stateFieldName = null): Response
	{
		return $this->connector->send(new GetEntityState($entityName, $entityId, $stateFieldName));
	}


	/**
	 * @param string $id Identifier for the state_machine
	 */
	public function getStateMachine(string $id): Response
	{
		return $this->connector->send(new GetStateMachine($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getStateMachineList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetStateMachineList($limit, $page, $swQuery));
	}


	public function searchStateMachine(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchStateMachine($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $entityName Name of the entity.
	 * @param string $entityId Identifier of the entity.
	 * @param string $transition The `action_name` of the `state_machine_transition`.
	 * @param null|string $stateFieldName This is the state column within the order delivery database table. There should be no need to change it from the default.
	 */
	public function transitionEntityState(string $entityName, string $entityId, string $transition, array $data = [], ?string $stateFieldName = null): Response
	{
		return $this->connector->send(new TransitionEntityState($entityName, $entityId, $transition, $data, $stateFieldName));
	}


	/**
	 * @param string $id Identifier for the state_machine
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateStateMachine(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateStateMachine($id, $data, $response));
	}
}
