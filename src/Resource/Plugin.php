<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Plugin\AggregatePlugin;
use TeamNiftyGmbH\Shopware\Requests\Plugin\CreatePlugin;
use TeamNiftyGmbH\Shopware\Requests\Plugin\DeletePlugin;
use TeamNiftyGmbH\Shopware\Requests\Plugin\GetPlugin;
use TeamNiftyGmbH\Shopware\Requests\Plugin\GetPluginList;
use TeamNiftyGmbH\Shopware\Requests\Plugin\SearchPlugin;
use TeamNiftyGmbH\Shopware\Requests\Plugin\UpdatePlugin;

class Plugin extends BaseResource
{
	public function aggregatePlugin(array $data = []): Response
	{
		return $this->connector->send(new AggregatePlugin($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createPlugin(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreatePlugin($data, $response));
	}


	/**
	 * @param string $id Identifier for the plugin
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deletePlugin(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeletePlugin($id, $response));
	}


	/**
	 * @param string $id Identifier for the plugin
	 */
	public function getPlugin(string $id): Response
	{
		return $this->connector->send(new GetPlugin($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getPluginList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetPluginList($limit, $page, $swQuery));
	}


	public function searchPlugin(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchPlugin($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the plugin
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updatePlugin(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdatePlugin($id, $data, $response));
	}
}
