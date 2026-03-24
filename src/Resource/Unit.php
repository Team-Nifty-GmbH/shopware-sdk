<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Unit\AggregateUnit;
use TeamNiftyGmbH\Shopware\Requests\Unit\CreateUnit;
use TeamNiftyGmbH\Shopware\Requests\Unit\DeleteUnit;
use TeamNiftyGmbH\Shopware\Requests\Unit\GetUnit;
use TeamNiftyGmbH\Shopware\Requests\Unit\GetUnitList;
use TeamNiftyGmbH\Shopware\Requests\Unit\SearchUnit;
use TeamNiftyGmbH\Shopware\Requests\Unit\UpdateUnit;

class Unit extends BaseResource
{
	public function aggregateUnit(array $data = []): Response
	{
		return $this->connector->send(new AggregateUnit($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createUnit(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateUnit($data, $response));
	}


	/**
	 * @param string $id Identifier for the unit
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteUnit(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteUnit($id, $response));
	}


	/**
	 * @param string $id Identifier for the unit
	 */
	public function getUnit(string $id): Response
	{
		return $this->connector->send(new GetUnit($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getUnitList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetUnitList($limit, $page, $swQuery));
	}


	public function searchUnit(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchUnit($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the unit
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateUnit(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateUnit($id, $data, $response));
	}
}
