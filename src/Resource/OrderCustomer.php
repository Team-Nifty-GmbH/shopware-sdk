<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\AggregateOrderCustomer;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\CreateOrderCustomer;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\DeleteOrderCustomer;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\GetOrderCustomer;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\GetOrderCustomerList;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\SearchOrderCustomer;
use TeamNiftyGmbH\Shopware\Requests\OrderCustomer\UpdateOrderCustomer;

class OrderCustomer extends BaseResource
{
	public function aggregateOrderCustomer(array $data = []): Response
	{
		return $this->connector->send(new AggregateOrderCustomer($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createOrderCustomer(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateOrderCustomer($data, $response));
	}


	/**
	 * @param string $id Identifier for the order_customer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteOrderCustomer(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteOrderCustomer($id, $response));
	}


	/**
	 * @param string $id Identifier for the order_customer
	 */
	public function getOrderCustomer(string $id): Response
	{
		return $this->connector->send(new GetOrderCustomer($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getOrderCustomerList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetOrderCustomerList($limit, $page, $swQuery));
	}


	public function searchOrderCustomer(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchOrderCustomer($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the order_customer
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateOrderCustomer(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateOrderCustomer($id, $data, $response));
	}
}
