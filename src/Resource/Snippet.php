<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Snippet\AggregateSnippet;
use TeamNiftyGmbH\Shopware\Requests\Snippet\CreateSnippet;
use TeamNiftyGmbH\Shopware\Requests\Snippet\DeleteSnippet;
use TeamNiftyGmbH\Shopware\Requests\Snippet\GetSnippet;
use TeamNiftyGmbH\Shopware\Requests\Snippet\GetSnippetList;
use TeamNiftyGmbH\Shopware\Requests\Snippet\SearchSnippet;
use TeamNiftyGmbH\Shopware\Requests\Snippet\UpdateSnippet;

class Snippet extends BaseResource
{
	public function aggregateSnippet(array $data = []): Response
	{
		return $this->connector->send(new AggregateSnippet($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSnippet(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSnippet($data, $response));
	}


	/**
	 * @param string $id Identifier for the snippet
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSnippet(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSnippet($id, $response));
	}


	/**
	 * @param string $id Identifier for the snippet
	 */
	public function getSnippet(string $id): Response
	{
		return $this->connector->send(new GetSnippet($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSnippetList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSnippetList($limit, $page, $swQuery));
	}


	public function searchSnippet(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSnippet($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the snippet
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSnippet(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSnippet($id, $data, $response));
	}
}
