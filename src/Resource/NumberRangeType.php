<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\AggregateNumberRangeType;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\CreateNumberRangeType;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\DeleteNumberRangeType;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\GetNumberRangeType;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\GetNumberRangeTypeList;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\SearchNumberRangeType;
use TeamNiftyGmbH\Shopware\Requests\NumberRangeType\UpdateNumberRangeType;

class NumberRangeType extends BaseResource
{
	public function aggregateNumberRangeType(array $data = []): Response
	{
		return $this->connector->send(new AggregateNumberRangeType($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createNumberRangeType(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateNumberRangeType($data, $response));
	}


	/**
	 * @param string $id Identifier for the number_range_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteNumberRangeType(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteNumberRangeType($id, $response));
	}


	/**
	 * @param string $id Identifier for the number_range_type
	 */
	public function getNumberRangeType(string $id): Response
	{
		return $this->connector->send(new GetNumberRangeType($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getNumberRangeTypeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetNumberRangeTypeList($limit, $page, $swQuery));
	}


	public function searchNumberRangeType(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchNumberRangeType($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the number_range_type
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateNumberRangeType(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateNumberRangeType($id, $data, $response));
	}
}
