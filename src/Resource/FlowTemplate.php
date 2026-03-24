<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\AggregateFlowTemplate;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\CreateFlowTemplate;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\DeleteFlowTemplate;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\GetFlowTemplate;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\GetFlowTemplateList;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\SearchFlowTemplate;
use TeamNiftyGmbH\Shopware\Requests\FlowTemplate\UpdateFlowTemplate;

class FlowTemplate extends BaseResource
{
	public function aggregateFlowTemplate(array $data = []): Response
	{
		return $this->connector->send(new AggregateFlowTemplate($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createFlowTemplate(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateFlowTemplate($data, $response));
	}


	/**
	 * @param string $id Identifier for the flow_template
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteFlowTemplate(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteFlowTemplate($id, $response));
	}


	/**
	 * @param string $id Identifier for the flow_template
	 */
	public function getFlowTemplate(string $id): Response
	{
		return $this->connector->send(new GetFlowTemplate($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getFlowTemplateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetFlowTemplateList($limit, $page, $swQuery));
	}


	public function searchFlowTemplate(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchFlowTemplate($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the flow_template
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateFlowTemplate(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateFlowTemplate($id, $data, $response));
	}
}
