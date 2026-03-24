<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Script\AggregateScript;
use TeamNiftyGmbH\Shopware\Requests\Script\CreateScript;
use TeamNiftyGmbH\Shopware\Requests\Script\DeleteScript;
use TeamNiftyGmbH\Shopware\Requests\Script\GetScript;
use TeamNiftyGmbH\Shopware\Requests\Script\GetScriptList;
use TeamNiftyGmbH\Shopware\Requests\Script\SearchScript;
use TeamNiftyGmbH\Shopware\Requests\Script\UpdateScript;

class Script extends BaseResource
{
	public function aggregateScript(array $data = []): Response
	{
		return $this->connector->send(new AggregateScript($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createScript(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateScript($data, $response));
	}


	/**
	 * @param string $id Identifier for the script
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteScript(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteScript($id, $response));
	}


	/**
	 * @param string $id Identifier for the script
	 */
	public function getScript(string $id): Response
	{
		return $this->connector->send(new GetScript($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getScriptList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetScriptList($limit, $page, $swQuery));
	}


	public function searchScript(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchScript($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the script
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateScript(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateScript($id, $data, $response));
	}
}
