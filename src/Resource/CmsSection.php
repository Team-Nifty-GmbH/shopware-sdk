<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\AggregateCmsSection;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\CreateCmsSection;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\DeleteCmsSection;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\GetCmsSection;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\GetCmsSectionList;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\SearchCmsSection;
use TeamNiftyGmbH\Shopware\Requests\CmsSection\UpdateCmsSection;

class CmsSection extends BaseResource
{
	public function aggregateCmsSection(array $data = []): Response
	{
		return $this->connector->send(new AggregateCmsSection($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCmsSection(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCmsSection($data, $response));
	}


	/**
	 * @param string $id Identifier for the cms_section
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCmsSection(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCmsSection($id, $response));
	}


	/**
	 * @param string $id Identifier for the cms_section
	 */
	public function getCmsSection(string $id): Response
	{
		return $this->connector->send(new GetCmsSection($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCmsSectionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCmsSectionList($limit, $page, $swQuery));
	}


	public function searchCmsSection(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCmsSection($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the cms_section
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCmsSection(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCmsSection($id, $data, $response));
	}
}
