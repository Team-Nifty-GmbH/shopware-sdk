<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\AggregateStateMachineState;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\CreateStateMachineState;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\DeleteStateMachineState;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\GetStateMachineState;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\GetStateMachineStateList;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\SearchStateMachineState;
use TeamNiftyGmbH\Shopware\Requests\StateMachineState\UpdateStateMachineState;

class StateMachineState extends BaseResource
{
	public function aggregateStateMachineState(array $data = []): Response
	{
		return $this->connector->send(new AggregateStateMachineState($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createStateMachineState(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateStateMachineState($data, $response));
	}


	/**
	 * @param string $id Identifier for the state_machine_state
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteStateMachineState(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteStateMachineState($id, $response));
	}


	/**
	 * @param string $id Identifier for the state_machine_state
	 */
	public function getStateMachineState(string $id): Response
	{
		return $this->connector->send(new GetStateMachineState($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getStateMachineStateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetStateMachineStateList($limit, $page, $swQuery));
	}


	public function searchStateMachineState(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchStateMachineState($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the state_machine_state
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateStateMachineState(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateStateMachineState($id, $data, $response));
	}
}
