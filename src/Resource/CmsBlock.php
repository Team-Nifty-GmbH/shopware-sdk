<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\AggregateCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\CreateCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\DeleteCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\GetCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\GetCmsBlockList;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\SearchCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\CmsBlock\UpdateCmsBlock;

class CmsBlock extends BaseResource
{
	public function aggregateCmsBlock(array $data = []): Response
	{
		return $this->connector->send(new AggregateCmsBlock($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCmsBlock(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCmsBlock($data, $response));
	}


	/**
	 * @param string $id Identifier for the cms_block
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCmsBlock(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCmsBlock($id, $response));
	}


	/**
	 * @param string $id Identifier for the cms_block
	 */
	public function getCmsBlock(string $id): Response
	{
		return $this->connector->send(new GetCmsBlock($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCmsBlockList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCmsBlockList($limit, $page, $swQuery));
	}


	public function searchCmsBlock(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCmsBlock($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the cms_block
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCmsBlock(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCmsBlock($id, $data, $response));
	}
}
