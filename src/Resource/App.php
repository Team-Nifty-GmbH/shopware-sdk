<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\App\AggregateApp;
use TeamNiftyGmbH\Shopware\Requests\App\CreateApp;
use TeamNiftyGmbH\Shopware\Requests\App\DeleteApp;
use TeamNiftyGmbH\Shopware\Requests\App\GetApp;
use TeamNiftyGmbH\Shopware\Requests\App\GetAppList;
use TeamNiftyGmbH\Shopware\Requests\App\SearchApp;
use TeamNiftyGmbH\Shopware\Requests\App\UpdateApp;

class App extends BaseResource
{
	public function aggregateApp(array $data = []): Response
	{
		return $this->connector->send(new AggregateApp($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createApp(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateApp($data, $response));
	}


	/**
	 * @param string $id Identifier for the app
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteApp(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteApp($id, $response));
	}


	/**
	 * @param string $id Identifier for the app
	 */
	public function getApp(string $id): Response
	{
		return $this->connector->send(new GetApp($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAppList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAppList($limit, $page, $swQuery));
	}


	public function searchApp(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchApp($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the app
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateApp(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateApp($id, $data, $response));
	}
}
