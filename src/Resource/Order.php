<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\Order\AggregateOrder;
use TeamNiftyGmbH\Shopware\Requests\Order\CreateOrder;
use TeamNiftyGmbH\Shopware\Requests\Order\DeleteOrder;
use TeamNiftyGmbH\Shopware\Requests\Order\GetOrder;
use TeamNiftyGmbH\Shopware\Requests\Order\GetOrderList;
use TeamNiftyGmbH\Shopware\Requests\Order\SearchOrder;
use TeamNiftyGmbH\Shopware\Requests\Order\UpdateOrder;

class Order extends BaseResource
{
    public function aggregateOrder(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrder($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrder(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrder($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrder(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrder($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order
     */
    public function getOrder(string $id): Response
    {
        return $this->connector->send(new GetOrder($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderList($limit, $page, $swQuery));
    }

    public function searchOrder(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrder($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrder(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrder($id, $data, $response));
    }
}
