<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Category\AggregateCategory;
use TeamNiftyGmbH\Shopware\Requests\Category\CreateCategory;
use TeamNiftyGmbH\Shopware\Requests\Category\DeleteCategory;
use TeamNiftyGmbH\Shopware\Requests\Category\GetCategory;
use TeamNiftyGmbH\Shopware\Requests\Category\GetCategoryList;
use TeamNiftyGmbH\Shopware\Requests\Category\SearchCategory;
use TeamNiftyGmbH\Shopware\Requests\Category\UpdateCategory;

class Category extends BaseResource
{
	public function aggregateCategory(array $data = []): Response
	{
		return $this->connector->send(new AggregateCategory($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCategory(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCategory($data, $response));
	}


	/**
	 * @param string $id Identifier for the category
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCategory(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCategory($id, $response));
	}


	/**
	 * @param string $id Identifier for the category
	 */
	public function getCategory(string $id): Response
	{
		return $this->connector->send(new GetCategory($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCategoryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCategoryList($limit, $page, $swQuery));
	}


	public function searchCategory(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCategory($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the category
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCategory(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCategory($id, $data, $response));
	}
}
