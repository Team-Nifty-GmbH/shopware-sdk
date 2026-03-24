<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\AggregateOrderLineItem;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\CreateOrderLineItem;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\DeleteOrderLineItem;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\GetOrderLineItem;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\GetOrderLineItemList;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\SearchOrderLineItem;
use TeamNiftyGmbH\Shopware\Requests\OrderLineItem\UpdateOrderLineItem;

class OrderLineItem extends BaseResource
{
	public function aggregateOrderLineItem(array $data = []): Response
	{
		return $this->connector->send(new AggregateOrderLineItem($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createOrderLineItem(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateOrderLineItem($data, $response));
	}


	/**
	 * @param string $id Identifier for the order_line_item
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteOrderLineItem(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteOrderLineItem($id, $response));
	}


	/**
	 * @param string $id Identifier for the order_line_item
	 */
	public function getOrderLineItem(string $id): Response
	{
		return $this->connector->send(new GetOrderLineItem($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getOrderLineItemList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetOrderLineItemList($limit, $page, $swQuery));
	}


	public function searchOrderLineItem(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchOrderLineItem($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the order_line_item
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateOrderLineItem(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateOrderLineItem($id, $data, $response));
	}
}
