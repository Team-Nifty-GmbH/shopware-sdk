<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Currency\AggregateCurrency;
use TeamNiftyGmbH\Shopware\Requests\Currency\CreateCurrency;
use TeamNiftyGmbH\Shopware\Requests\Currency\DeleteCurrency;
use TeamNiftyGmbH\Shopware\Requests\Currency\GetCurrency;
use TeamNiftyGmbH\Shopware\Requests\Currency\GetCurrencyList;
use TeamNiftyGmbH\Shopware\Requests\Currency\SearchCurrency;
use TeamNiftyGmbH\Shopware\Requests\Currency\UpdateCurrency;

class Currency extends BaseResource
{
	public function aggregateCurrency(array $data = []): Response
	{
		return $this->connector->send(new AggregateCurrency($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCurrency(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCurrency($data, $response));
	}


	/**
	 * @param string $id Identifier for the currency
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCurrency(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCurrency($id, $response));
	}


	/**
	 * @param string $id Identifier for the currency
	 */
	public function getCurrency(string $id): Response
	{
		return $this->connector->send(new GetCurrency($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCurrencyList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCurrencyList($limit, $page, $swQuery));
	}


	public function searchCurrency(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCurrency($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the currency
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCurrency(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCurrency($id, $data, $response));
	}
}
