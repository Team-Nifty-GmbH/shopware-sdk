<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\AggregateOrderDelivery;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\CreateOrderDelivery;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\DeleteOrderDelivery;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\GetOrderDelivery;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\GetOrderDeliveryList;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\SearchOrderDelivery;
use TeamNiftyGmbH\Shopware\Requests\OrderDelivery\UpdateOrderDelivery;

class OrderDelivery extends BaseResource
{
	public function aggregateOrderDelivery(array $data = []): Response
	{
		return $this->connector->send(new AggregateOrderDelivery($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createOrderDelivery(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateOrderDelivery($data, $response));
	}


	/**
	 * @param string $id Identifier for the order_delivery
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteOrderDelivery(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteOrderDelivery($id, $response));
	}


	/**
	 * @param string $id Identifier for the order_delivery
	 */
	public function getOrderDelivery(string $id): Response
	{
		return $this->connector->send(new GetOrderDelivery($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getOrderDeliveryList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetOrderDeliveryList($limit, $page, $swQuery));
	}


	public function searchOrderDelivery(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchOrderDelivery($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the order_delivery
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateOrderDelivery(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateOrderDelivery($id, $data, $response));
	}
}
