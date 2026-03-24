<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\AggregateSeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\CreateSeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\DeleteSeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\GetSeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\GetSeoUrlTemplateList;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\SearchSeoUrlTemplate;
use TeamNiftyGmbH\Shopware\Requests\SeoUrlTemplate\UpdateSeoUrlTemplate;

class SeoUrlTemplate extends BaseResource
{
	public function aggregateSeoUrlTemplate(array $data = []): Response
	{
		return $this->connector->send(new AggregateSeoUrlTemplate($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createSeoUrlTemplate(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateSeoUrlTemplate($data, $response));
	}


	/**
	 * @param string $id Identifier for the seo_url_template
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteSeoUrlTemplate(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteSeoUrlTemplate($id, $response));
	}


	/**
	 * @param string $id Identifier for the seo_url_template
	 */
	public function getSeoUrlTemplate(string $id): Response
	{
		return $this->connector->send(new GetSeoUrlTemplate($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getSeoUrlTemplateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetSeoUrlTemplateList($limit, $page, $swQuery));
	}


	public function searchSeoUrlTemplate(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchSeoUrlTemplate($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the seo_url_template
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateSeoUrlTemplate(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateSeoUrlTemplate($id, $data, $response));
	}
}
