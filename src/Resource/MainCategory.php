<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\AggregateMainCategory;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\CreateMainCategory;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\DeleteMainCategory;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\GetMainCategory;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\GetMainCategoryList;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\SearchMainCategory;
use TeamNiftyGmbH\Shopware\Requests\MainCategory\UpdateMainCategory;

class MainCategory extends BaseResource
{
	public function aggregateMainCategory(array $data = []): Response
	{
		return $this->connector->send(new AggregateMainCategory($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createMainCategory(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateMainCategory($data, $response));
	}


	/**
	 * @param string $id Identifier for the main_category
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteMainCategory(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteMainCategory($id, $response));
	}


	/**
	 * @param string $id Identifier for the main_category
	 */
	public function getMainCategory(string $id): Response
	{
		return $this->connector->send(new GetMainCategory($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getMainCategoryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetMainCategoryList($limit, $page, $swQuery));
	}


	public function searchMainCategory(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchMainCategory($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the main_category
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateMainCategory(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateMainCategory($id, $data, $response));
	}
}
