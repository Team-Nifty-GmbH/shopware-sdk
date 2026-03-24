<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Tax\AggregateTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\CreateTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\DeleteTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\GetTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\GetTaxList;
use TeamNiftyGmbH\Shopware\Requests\Tax\SearchTax;
use TeamNiftyGmbH\Shopware\Requests\Tax\UpdateTax;

class Tax extends BaseResource
{
	public function aggregateTax(array $data = []): Response
	{
		return $this->connector->send(new AggregateTax($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createTax(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateTax($data, $response));
	}


	/**
	 * @param string $id Identifier for the tax
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteTax(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteTax($id, $response));
	}


	/**
	 * @param string $id Identifier for the tax
	 */
	public function getTax(string $id): Response
	{
		return $this->connector->send(new GetTax($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getTaxList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetTaxList($limit, $page, $swQuery));
	}


	public function searchTax(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchTax($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the tax
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateTax(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateTax($id, $data, $response));
	}
}
