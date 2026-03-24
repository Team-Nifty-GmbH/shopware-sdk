<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Flow\AggregateFlow;
use TeamNiftyGmbH\Shopware\Requests\Flow\CreateFlow;
use TeamNiftyGmbH\Shopware\Requests\Flow\DeleteFlow;
use TeamNiftyGmbH\Shopware\Requests\Flow\GetFlow;
use TeamNiftyGmbH\Shopware\Requests\Flow\GetFlowList;
use TeamNiftyGmbH\Shopware\Requests\Flow\SearchFlow;
use TeamNiftyGmbH\Shopware\Requests\Flow\UpdateFlow;

class Flow extends BaseResource
{
	public function aggregateFlow(array $data = []): Response
	{
		return $this->connector->send(new AggregateFlow($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createFlow(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateFlow($data, $response));
	}


	/**
	 * @param string $id Identifier for the flow
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteFlow(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteFlow($id, $response));
	}


	/**
	 * @param string $id Identifier for the flow
	 */
	public function getFlow(string $id): Response
	{
		return $this->connector->send(new GetFlow($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getFlowList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetFlowList($limit, $page, $swQuery));
	}


	public function searchFlow(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchFlow($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the flow
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateFlow(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateFlow($id, $data, $response));
	}
}
