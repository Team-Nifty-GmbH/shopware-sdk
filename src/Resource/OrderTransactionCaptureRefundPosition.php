<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\AggregateOrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\CreateOrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\DeleteOrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\GetOrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\GetOrderTransactionCaptureRefundPositionList;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\SearchOrderTransactionCaptureRefundPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefundPosition\UpdateOrderTransactionCaptureRefundPosition;

class OrderTransactionCaptureRefundPosition extends BaseResource
{
	public function aggregateOrderTransactionCaptureRefundPosition(array $data = []): Response
	{
		return $this->connector->send(new AggregateOrderTransactionCaptureRefundPosition($data));
	}


	/**
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function createOrderTransactionCaptureRefundPosition(array $data, ?string $response = null): Response
	{
		return $this->connector->send(new CreateOrderTransactionCaptureRefundPosition($data, $response));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture_refund_position
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function deleteOrderTransactionCaptureRefundPosition(string $id, ?string $response = null): Response
	{
		return $this->connector->send(new DeleteOrderTransactionCaptureRefundPosition($id, $response));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture_refund_position
	 */
	public function getOrderTransactionCaptureRefundPosition(string $id): Response
	{
		return $this->connector->send(new GetOrderTransactionCaptureRefundPosition($id));
	}


	/**
	 * @param null|int $limit Max amount of resources to be returned in a page
	 * @param null|int $page The page to be returned
	 * @param null|string $query Encoded SwagQL in JSON
	 */
	public function getOrderTransactionCaptureRefundPositionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
	{
		return $this->connector->send(new GetOrderTransactionCaptureRefundPositionList($limit, $page, $swQuery));
	}


	public function searchOrderTransactionCaptureRefundPosition(array $data = [], ?string $swIncludeSearchInfo = null): Response
	{
		return $this->connector->send(new SearchOrderTransactionCaptureRefundPosition($data, $swIncludeSearchInfo));
	}


	/**
	 * @param string $id Identifier for the order_transaction_capture_refund_position
	 * @param null|string $response Data format for response. Empty if none is provided.
	 */
	public function updateOrderTransactionCaptureRefundPosition(string $id, array $data, ?string $response = null): Response
	{
		return $this->connector->send(new UpdateOrderTransactionCaptureRefundPosition($id, $data, $response));
	}
}
