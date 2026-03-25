<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\AggregateOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\CreateOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\DeleteOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\GetOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\GetOrderAddressList;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\SearchOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\UpdateOrderAddress;
use TeamNiftyGmbH\Shopware\Requests\OrderAddress\UpdateOrderAddresses;

class OrderAddress extends BaseResource
{
    public function aggregateOrderAddress(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrderAddress($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrderAddress(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrderAddress($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_address
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrderAddress(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrderAddress($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_address
     */
    public function getOrderAddress(string $id): Response
    {
        return $this->connector->send(new GetOrderAddress($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderAddressList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderAddressList($limit, $page, $swQuery));
    }

    public function searchOrderAddress(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrderAddress($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order_address
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrderAddress(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrderAddress($id, $data, $response));
    }

    /**
     * @param  string  $orderId  Identifier of the order.
     */
    public function updateOrderAddresses(string $orderId, array $data): Response
    {
        return $this->connector->send(new UpdateOrderAddresses($orderId, $data));
    }
}
