<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\AggregateCmsPage;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\CreateCmsPage;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\DeleteCmsPage;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\GetCmsPage;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\GetCmsPageList;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\SearchCmsPage;
use TeamNiftyGmbH\Shopware\Requests\CmsPage\UpdateCmsPage;

class CmsPage extends BaseResource
{
	public function aggregateCmsPage(array $data = []): Response
	{
		return $this->connector->send(new AggregateCmsPage($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCmsPage(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCmsPage($data, $response));
	}


	/**
	 * @param string $id Identifier for the cms_page
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCmsPage(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCmsPage($id, $response));
	}


	/**
	 * @param string $id Identifier for the cms_page
	 */
	public function getCmsPage(string $id): Response
	{
		return $this->connector->send(new GetCmsPage($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCmsPageList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCmsPageList($limit, $page, $swQuery));
	}


	public function searchCmsPage(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCmsPage($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the cms_page
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCmsPage(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCmsPage($id, $data, $response));
	}
}
