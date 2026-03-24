<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\AggregateFlowSequence;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\CreateFlowSequence;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\DeleteFlowSequence;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\GetFlowSequence;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\GetFlowSequenceList;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\SearchFlowSequence;
use TeamNiftyGmbH\Shopware\Requests\FlowSequence\UpdateFlowSequence;

class FlowSequence extends BaseResource
{
	public function aggregateFlowSequence(array $data = []): Response
	{
		return $this->connector->send(new AggregateFlowSequence($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createFlowSequence(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateFlowSequence($data, $response));
	}


	/**
	 * @param string $id Identifier for the flow_sequence
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteFlowSequence(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteFlowSequence($id, $response));
	}


	/**
	 * @param string $id Identifier for the flow_sequence
	 */
	public function getFlowSequence(string $id): Response
	{
		return $this->connector->send(new GetFlowSequence($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getFlowSequenceList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetFlowSequenceList($limit, $page, $swQuery));
	}


	public function searchFlowSequence(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchFlowSequence($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the flow_sequence
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateFlowSequence(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateFlowSequence($id, $data, $response));
	}
}
