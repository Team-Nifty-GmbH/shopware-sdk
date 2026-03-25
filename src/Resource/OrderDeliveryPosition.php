<?php

namespace TeamNiftyGmbH\Shopware\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\AggregateOrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\CreateOrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\DeleteOrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\GetOrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\GetOrderDeliveryPositionList;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\SearchOrderDeliveryPosition;
use TeamNiftyGmbH\Shopware\Requests\OrderDeliveryPosition\UpdateOrderDeliveryPosition;

class OrderDeliveryPosition extends BaseResource
{
    public function aggregateOrderDeliveryPosition(array $data = []): Response
    {
        return $this->connector->send(new AggregateOrderDeliveryPosition($data));
    }

    /**
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function createOrderDeliveryPosition(array $data, ?string $response = null): Response
    {
        return $this->connector->send(new CreateOrderDeliveryPosition($data, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_delivery_position
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function deleteOrderDeliveryPosition(string $id, ?string $response = null): Response
    {
        return $this->connector->send(new DeleteOrderDeliveryPosition($id, $response));
    }

    /**
     * @param  string  $id  Identifier for the order_delivery_position
     */
    public function getOrderDeliveryPosition(string $id): Response
    {
        return $this->connector->send(new GetOrderDeliveryPosition($id));
    }

    /**
     * @param  null|int  $limit  Max amount of resources to be returned in a page
     * @param  null|int  $page  The page to be returned
     * @param  null|string  $query  Encoded SwagQL in JSON
     */
    public function getOrderDeliveryPositionList(?int $limit = null, ?int $page = null, ?string $swQuery = null): Response
    {
        return $this->connector->send(new GetOrderDeliveryPositionList($limit, $page, $swQuery));
    }

    public function searchOrderDeliveryPosition(array $data = [], ?string $swIncludeSearchInfo = null): Response
    {
        return $this->connector->send(new SearchOrderDeliveryPosition($data, $swIncludeSearchInfo));
    }

    /**
     * @param  string  $id  Identifier for the order_delivery_position
     * @param  null|string  $response  Data format for response. Empty if none is provided.
     */
    public function updateOrderDeliveryPosition(string $id, array $data, ?string $response = null): Response
    {
        return $this->connector->send(new UpdateOrderDeliveryPosition($id, $data, $response));
    }
}
