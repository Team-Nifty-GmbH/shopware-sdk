<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\AggregateAppCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\CreateAppCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\DeleteAppCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\GetAppCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\GetAppCmsBlockList;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\SearchAppCmsBlock;
use TeamNiftyGmbH\Shopware\Requests\AppCmsBlock\UpdateAppCmsBlock;

class AppCmsBlock extends BaseResource
{
	public function aggregateAppCmsBlock(array $data = []): Response
	{
		return $this->connector->send(new AggregateAppCmsBlock($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createAppCmsBlock(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateAppCmsBlock($data, $response));
	}


	/**
	 * @param string $id Identifier for the app_cms_block
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteAppCmsBlock(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteAppCmsBlock($id, $response));
	}


	/**
	 * @param string $id Identifier for the app_cms_block
	 */
	public function getAppCmsBlock(string $id): Response
	{
		return $this->connector->send(new GetAppCmsBlock($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getAppCmsBlockList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetAppCmsBlockList($limit, $page, $swQuery));
	}


	public function searchAppCmsBlock(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchAppCmsBlock($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the app_cms_block
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateAppCmsBlock(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateAppCmsBlock($id, $data, $response));
	}
}
