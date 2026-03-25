<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\AggregateOrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\CreateOrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\DeleteOrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\GetOrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\GetOrderTransactionCaptureRefundList;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\SearchOrderTransactionCaptureRefund;
use TeamNiftyGmbH\Shopware\Requests\OrderTransactionCaptureRefund\UpdateOrderTransactionCaptureRefund;

class OrderTransactionCaptureRefund extends BaseResource
{
    public function aggregateOrderTransactionCaptureRefund(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrderTransactionCaptureRefund($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrderTransactionCaptureRefund(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrderTransactionCaptureRefund($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrderTransactionCaptureRefund(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrderTransactionCaptureRefund($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund
     */
    public function getOrderTransactionCaptureRefund(string $id): Response
    {
        return $this->connector->send(new GetOrderTransactionCaptureRefund($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderTransactionCaptureRefundList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderTransactionCaptureRefundList($limit, $page, $swQuery));
    }

    public function searchOrderTransactionCaptureRefund(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrderTransactionCaptureRefund($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction_capture_refund
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrderTransactionCaptureRefund(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrderTransactionCaptureRefund($id, $data, $response));
    }
}
