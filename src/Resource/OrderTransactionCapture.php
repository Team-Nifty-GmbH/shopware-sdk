<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\AggregateOrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\CreateOrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\DeleteOrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\GetOrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\GetOrderTransactionCaptureList;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\SearchOrderTransactionCapture;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCapture\UpdateOrderTransactionCapture;

class OrderTransactionCapture extends BaseResource
{
	public function aggregateOrderTransactionCapture(array $data = []): Response
	{
		return $this->connector->send(new AggregateOrderTransactionCapture($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createOrderTransactionCapture(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateOrderTransactionCapture($data, $response));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteOrderTransactionCapture(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteOrderTransactionCapture($id, $response));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture
	 */
	public function getOrderTransactionCapture(string $id): Response
	{
		return $this->connector->send(new GetOrderTransactionCapture($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getOrderTransactionCaptureList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetOrderTransactionCaptureList($limit, $page, $swQuery));
	}


	public function searchOrderTransactionCapture(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchOrderTransactionCapture($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateOrderTransactionCapture(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateOrderTransactionCapture($id, $data, $response));
	}
}
