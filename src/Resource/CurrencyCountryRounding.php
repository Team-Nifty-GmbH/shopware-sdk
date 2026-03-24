<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\AggregateCurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\CreateCurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\DeleteCurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\GetCurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\GetCurrencyCountryRoundingList;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\SearchCurrencyCountryRounding;
use TeamNiftyGmbH\Shopware\Requests\CurrencyCountryRounding\UpdateCurrencyCountryRounding;

class CurrencyCountryRounding extends BaseResource
{
	public function aggregateCurrencyCountryRounding(array $data = []): Response
	{
		return $this->connector->send(new AggregateCurrencyCountryRounding($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createCurrencyCountryRounding(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateCurrencyCountryRounding($data, $response));
	}


	/**
	 * @param string $id Identifier for the currency_country_rounding
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteCurrencyCountryRounding(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteCurrencyCountryRounding($id, $response));
	}


	/**
	 * @param string $id Identifier for the currency_country_rounding
	 */
	public function getCurrencyCountryRounding(string $id): Response
	{
		return $this->connector->send(new GetCurrencyCountryRounding($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getCurrencyCountryRoundingList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetCurrencyCountryRoundingList($limit, $page, $swQuery));
	}


	public function searchCurrencyCountryRounding(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchCurrencyCountryRounding($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the currency_country_rounding
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateCurrencyCountryRounding(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateCurrencyCountryRounding($id, $data, $response));
	}
}
