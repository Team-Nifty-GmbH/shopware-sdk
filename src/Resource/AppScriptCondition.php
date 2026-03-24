<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\AggregateAppScriptCondition;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\CreateAppScriptCondition;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\DeleteAppScriptCondition;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\GetAppScriptCondition;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\GetAppScriptConditionList;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\SearchAppScriptCondition;
use TeamNiftyGmbH\Shopware\Requests\AppScriptCondition\UpdateAppScriptCondition;

class AppScriptCondition extends BaseResource
{
	public function aggregateAppScriptCondition(array $data = []): Response
	{
		return $this->connector->send(new AggregateAppScriptCondition($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createAppScriptCondition(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateAppScriptCondition($data, $response));
	}


	/**
	 * @param string $id Identifier for the app_script_condition
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteAppScriptCondition(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteAppScriptCondition($id, $response));
	}


	/**
	 * @param string $id Identifier for the app_script_condition
	 */
	public function getAppScriptCondition(string $id): Response
	{
		return $this->connector->send(new GetAppScriptCondition($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAppScriptConditionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAppScriptConditionList($limit, $page, $swQuery));
	}


	public function searchAppScriptCondition(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchAppScriptCondition($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the app_script_condition
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateAppScriptCondition(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateAppScriptCondition($id, $data, $response));
	}
}
