<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\AggregateSnippetSet;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\CreateSnippetSet;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\DeleteSnippetSet;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\GetSnippetSet;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\GetSnippetSetList;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\SearchSnippetSet;
use TeamNiftyGmbH\Shopware\Requests\SnippetSet\UpdateSnippetSet;

class SnippetSet extends BaseResource
{
	public function aggregateSnippetSet(array $data = []): Response
	{
		return $this->connector->send(new AggregateSnippetSet($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSnippetSet(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSnippetSet($data, $response));
	}


	/**
	 * @param string $id Identifier for the snippet_set
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSnippetSet(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSnippetSet($id, $response));
	}


	/**
	 * @param string $id Identifier for the snippet_set
	 */
	public function getSnippetSet(string $id): Response
	{
		return $this->connector->send(new GetSnippetSet($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSnippetSetList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSnippetSetList($limit, $page, $swQuery));
	}


	public function searchSnippetSet(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSnippetSet($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the snippet_set
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSnippetSet(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSnippetSet($id, $data, $response));
	}
}
