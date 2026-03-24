<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\AggregateStateMachineTransition;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\CreateStateMachineTransition;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\DeleteStateMachineTransition;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\GetStateMachineTransition;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\GetStateMachineTransitionList;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\SearchStateMachineTransition;
use TeamNiftyGmbH\Shopware\Requests\StateMachineTransition\UpdateStateMachineTransition;

class StateMachineTransition extends BaseResource
{
	public function aggregateStateMachineTransition(array $data = []): Response
	{
		return $this->connector->send(new AggregateStateMachineTransition($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createStateMachineTransition(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateStateMachineTransition($data, $response));
	}


	/**
	 * @param string $id Identifier for the state_machine_transition
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteStateMachineTransition(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteStateMachineTransition($id, $response));
	}


	/**
	 * @param string $id Identifier for the state_machine_transition
	 */
	public function getStateMachineTransition(string $id): Response
	{
		return $this->connector->send(new GetStateMachineTransition($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getStateMachineTransitionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetStateMachineTransitionList($limit, $page, $swQuery));
	}


	public function searchStateMachineTransition(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchStateMachineTransition($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the state_machine_transition
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateStateMachineTransition(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateStateMachineTransition($id, $data, $response));
	}
}
