<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\AggregateOrderTransaction;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\CreateOrderTransaction;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\DeleteOrderTransaction;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\GetOrderTransaction;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\GetOrderTransactionList;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\SearchOrderTransaction;
use TeamNiftyGmbH\Shopware\Requests\OrderTransaction\UpdateOrderTransaction;

class OrderTransaction extends BaseResource
{
    public function aggregateOrderTransaction(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrderTransaction($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrderTransaction(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrderTransaction($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrderTransaction(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrderTransaction($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction
     */
    public function getOrderTransaction(string $id): Response
    {
        return $this->connector->send(new GetOrderTransaction($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderTransactionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderTransactionList($limit, $page, $swQuery));
    }

    public function searchOrderTransaction(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrderTransaction($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order_transaction
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrderTransaction(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrderTransaction($id, $data, $response));
    }
}
