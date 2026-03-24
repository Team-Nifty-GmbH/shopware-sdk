<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\AggregateDeliveryTime;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\CreateDeliveryTime;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\DeleteDeliveryTime;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\GetDeliveryTime;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\GetDeliveryTimeList;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\SearchDeliveryTime;
use TeamNiftyGmbH\Shopware\Requests\DeliveryTime\UpdateDeliveryTime;

class DeliveryTime extends BaseResource
{
	public function aggregateDeliveryTime(array $data = []): Response
	{
		return $this->connector->send(new AggregateDeliveryTime($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createDeliveryTime(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateDeliveryTime($data, $response));
	}


	/**
	 * @param string $id Identifier for the delivery_time
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteDeliveryTime(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteDeliveryTime($id, $response));
	}


	/**
	 * @param string $id Identifier for the delivery_time
	 */
	public function getDeliveryTime(string $id): Response
	{
		return $this->connector->send(new GetDeliveryTime($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getDeliveryTimeList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetDeliveryTimeList($limit, $page, $swQuery));
	}


	public function searchDeliveryTime(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchDeliveryTime($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the delivery_time
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateDeliveryTime(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateDeliveryTime($id, $data, $response));
	}
}
