<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\AggregateAppActionButton;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\CreateAppActionButton;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\DeleteAppActionButton;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\GetAppActionButton;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\GetAppActionButtonList;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\SearchAppActionButton;
use TeamNiftyGmbH\Shopware\Requests\AppActionButton\UpdateAppActionButton;

class AppActionButton extends BaseResource
{
	public function aggregateAppActionButton(array $data = []): Response
	{
		return $this->connector->send(new AggregateAppActionButton($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createAppActionButton(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateAppActionButton($data, $response));
	}


	/**
	 * @param string $id Identifier for the app_action_button
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteAppActionButton(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteAppActionButton($id, $response));
	}


	/**
	 * @param string $id Identifier for the app_action_button
	 */
	public function getAppActionButton(string $id): Response
	{
		return $this->connector->send(new GetAppActionButton($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAppActionButtonList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAppActionButtonList($limit, $page, $swQuery));
	}


	public function searchAppActionButton(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchAppActionButton($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the app_action_button
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateAppActionButton(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateAppActionButton($id, $data, $response));
	}
}
