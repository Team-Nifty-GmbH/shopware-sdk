<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Tag\AggregateTag;
use TeamNiftyGmbH\Shopware\Requests\Tag\CreateTag;
use TeamNiftyGmbH\Shopware\Requests\Tag\DeleteTag;
use TeamNiftyGmbH\Shopware\Requests\Tag\GetTag;
use TeamNiftyGmbH\Shopware\Requests\Tag\GetTagList;
use TeamNiftyGmbH\Shopware\Requests\Tag\SearchTag;
use TeamNiftyGmbH\Shopware\Requests\Tag\UpdateTag;

class Tag extends BaseResource
{
	public function aggregateTag(array $data = []): Response
	{
		return $this->connector->send(new AggregateTag($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createTag(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateTag($data, $response));
	}


	/**
	 * @param string $id Identifier for the tag
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteTag(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteTag($id, $response));
	}


	/**
	 * @param string $id Identifier for the tag
	 */
	public function getTag(string $id): Response
	{
		return $this->connector->send(new GetTag($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getTagList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetTagList($limit, $page, $swQuery));
	}


	public function searchTag(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchTag($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the tag
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateTag(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateTag($id, $data, $response));
	}
}
