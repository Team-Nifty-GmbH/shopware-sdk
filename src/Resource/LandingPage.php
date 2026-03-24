<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\AggregateLandingPage;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\CreateLandingPage;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\DeleteLandingPage;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\GetLandingPage;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\GetLandingPageList;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\SearchLandingPage;
use TeamNiftyGmbH\Shopware\Requests\LandingPage\UpdateLandingPage;

class LandingPage extends BaseResource
{
	public function aggregateLandingPage(array $data = []): Response
	{
		return $this->connector->send(new AggregateLandingPage($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createLandingPage(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateLandingPage($data, $response));
	}


	/**
	 * @param string $id Identifier for the landing_page
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteLandingPage(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteLandingPage($id, $response));
	}


	/**
	 * @param string $id Identifier for the landing_page
	 */
	public function getLandingPage(string $id): Response
	{
		return $this->connector->send(new GetLandingPage($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getLandingPageList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetLandingPageList($limit, $page, $swQuery));
	}


	public function searchLandingPage(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchLandingPage($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the landing_page
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateLandingPage(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateLandingPage($id, $data, $response));
	}
}
