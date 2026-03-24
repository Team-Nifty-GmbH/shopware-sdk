<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CountryState\AggregateCountryState;
use TeamNiftyGmbH\Shopware\Requests\CountryState\CreateCountryState;
use TeamNiftyGmbH\Shopware\Requests\CountryState\DeleteCountryState;
use TeamNiftyGmbH\Shopware\Requests\CountryState\GetCountryState;
use TeamNiftyGmbH\Shopware\Requests\CountryState\GetCountryStateList;
use TeamNiftyGmbH\Shopware\Requests\CountryState\SearchCountryState;
use TeamNiftyGmbH\Shopware\Requests\CountryState\UpdateCountryState;

class CountryState extends BaseResource
{
	public function aggregateCountryState(array $data = []): Response
	{
		return $this->connector->send(new AggregateCountryState($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCountryState(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCountryState($data, $response));
	}


	/**
	 * @param string $id Identifier for the country_state
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCountryState(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCountryState($id, $response));
	}


	/**
	 * @param string $id Identifier for the country_state
	 */
	public function getCountryState(string $id): Response
	{
		return $this->connector->send(new GetCountryState($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCountryStateList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCountryStateList($limit, $page, $swQuery));
	}


	public function searchCountryState(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCountryState($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the country_state
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCountryState(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCountryState($id, $data, $response));
	}
}
